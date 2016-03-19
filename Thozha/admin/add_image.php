<?php
include('dbcon.php');
if (isset($_POST['submit'])) {
$j = 0;    
$target_path = "uploads/original/";     
for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
$validextensions = array("jpeg", "jpg", "png");   
$ext = explode('.', basename($_FILES['file']['name'][$i]));  
$file_extension = end($ext); 
//$target_path = $target_path .  md5(uniqid()) . "." . $ext[count($ext) - 1];     
$j = $j + 1;     
if (($_FILES["file"]["size"][$i] < 10000000) 
&& in_array($file_extension, $validextensions)) {
$random_number = mt_rand(5, 99999);
///////////////////////////////////////////////////////////////////////////
$add="uploads/original/".$random_number.$_FILES['file']['name'][$i]; // the path with the file name where the file will be stored, upload is the directory name. 
	
if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $add)) {
	// Below lines are to display file name, temp name and file type , you can use them for testing your script only//////


///////// Start the thumbnail generation//////////////
$n_width=100;          // Fix the width of the thumb nail images
$n_height=96;         // Fix the height of the thumb nail imaage
////////////////////////////////////////////

$tsrc="uploads/thumb/".$random_number.$_FILES['file']['name'][$i];   // Path where thumb nail image will be stored
//echo $tsrc;
if (!($_FILES['file']['type'][$i] =="image/jpeg" OR $_FILES['file']['type'][$i]=="image/gif" OR $_FILES['file']['type'][$i]=="image/png")){echo "Your uploaded file must be of JPG or GIF. Other file types are not allowed<BR>";
exit;}
/////////////////////////////////////////////// Starting of GIF thumb nail creation///////////
if (@$_FILES['file']['type'][$i]=="image/gif")
{
$im=ImageCreateFromGIF($add);
$width=ImageSx($im);              // Original picture width is stored
$height=ImageSy($im);                  // Original picture height is stored
$n_height=($n_width/$width) * $height; // Add this line to maintain aspect ratio
$newimage=imagecreatetruecolor($n_width,$n_height);
imagealphablending($newimage, false);
imagesavealpha($newimage,true);
$transparent = imagecolorallocatealpha($newimage, 255, 255, 255, 127);
imagefilledrectangle($newimage, 0, 0, $width, $height, $transparent); 
imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);
if (function_exists("imagegif")) {
Header("Content-type: image/gif");
ImageGIF($newimage,$tsrc);
}
elseif (function_exists("imagejpeg")) {
Header("Content-type: image/jpeg");
ImageJPEG($newimage,$tsrc);
}
chmod("$tsrc",0777);
}////////// end of gif file thumb nail creation//////////

////////////// starting of JPG thumb nail creation//////////
if($_FILES['file']['type'][$i]=="image/jpeg"){
$im=ImageCreateFromJPEG($add); 
$width=ImageSx($im);              // Original picture width is stored
$height=ImageSy($im);             // Original picture height is stored
$n_height=($n_width/$width) * $height; // Add this line to maintain aspect ratio
$newimage=imagecreatetruecolor($n_width,$n_height);
imagealphablending($newimage, false);
imagesavealpha($newimage,true);
$transparent = imagecolorallocatealpha($newimage, 255, 255, 255, 127);
imagefilledrectangle($newimage, 0, 0, $width, $height, $transparent);                  
imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);
ImageJpeg($newimage,$tsrc);
chmod("$tsrc",0777);
}
if($_FILES['file']['type'][$i]=="image/png"){
$im=imagecreatefrompng($add); 
$width=ImageSx($im);              // Original picture width is stored
$height=ImageSy($im);             // Original picture height is stored
$n_height=($n_width/$width) * $height; // Add this line to maintain aspect ratio
$newimage=imagecreatetruecolor($n_width,$n_height);      
imagealphablending($newimage, false);
imagesavealpha($newimage,true);
$transparent = imagecolorallocatealpha($newimage, 255, 255, 255, 127);
imagefilledrectangle($newimage, 0, 0, $width, $height, $transparent);           
imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);
imagepng($newimage,$tsrc);
chmod("$tsrc",0777);
}
////////////////  End of JPG thumb nail creation //////////
//echo "<br>width = ($width) $n_width , height = ($height) $n_height ";
	
	
	$add_ex = explode('/', $add);
	$sql = "insert into related_image (image,status) values ('$add_ex[2]','1')";
	mysql_query($sql);
echo $j. ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
} else {    
echo $j. ').<span id="error">please try again!.</span><br/><br/>';
}
} else { 
echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
}
}
}
?>
<div class="row-fluid">
    <div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Add User</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form method="post" enctype="multipart/form-data">
					<div class="control-group">
						<div class="controls">
                            <div id="filediv"><input name="file[]" type="file" id="file"/></div><br/>
                            <input type="button" id="add_more" class="upload" value="Add More Files"/>
							<input type="submit" value="Upload File" name="submit" id="upload" class="upload"/>
						</div>
					</div>
                </form>
			</div>
        </div>
    </div>
    <!-- /block -->
</div>
<script type="text/javascript">


var abc = 0;      // Declaring and defining global increment variable.
$(document).ready(function() {
//  To add new input file field dynamically, on click of "Add More Files" button below function will be executed.
$('#add_more').click(function() {
$(this).before($("<div/>", {
id: 'filediv'
}).fadeIn('slow').append($("<input/>", {
name: 'file[]',
type: 'file',
id: 'file'
}), $("<br/><br/>")));
});
// Following function will executes on change event of file input to select different file.
$('body').on('change', '#file', function() {
if (this.files && this.files[0]) {
abc += 1; // Incrementing global variable by 1.
var z = abc - 1;
var x = $(this).parent().find('#previewimg' + z).remove();
$(this).before("<div id='abcd" + abc + "' class='abcd'><img id='previewimg" + abc + "' src=''/></div>");
var reader = new FileReader();
reader.onload = imageIsLoaded;
reader.readAsDataURL(this.files[0]);
$(this).hide();
$("#abcd" + abc).append($("<img/>", {
id: 'img',
src: 'x.png',
alt: 'delete'
}).click(function() {
$(this).parent().parent().remove();
}));
}
});
// To Preview Image
function imageIsLoaded(e) {
$('#previewimg' + abc).attr('src', e.target.result);
};
$('#upload').click(function(e) {
var name = $(":file").val();
if (!name) {
alert("First Image Must Be Selected");
e.preventDefault();
}
});
});


	
</script>			