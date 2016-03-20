<?php
session_start();
?>
<?php 
	include('dbcon.php');
	
	if (isset($_POST["submit"])) {
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["photo"]["name"]);
		$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
		// $check = getimagesize($_FILES["photo"]["tmp_name"]);
		// //thumbnail
		// $add="uploads/".$_FILES['photo']['name'];
		// $value = explode('.', $_FILES['photo']['name']);
		// $tsrc="uploads/".$value[0].'_t.'.$value[1];
// 		
		// $n_width=200;
		// $n_height=200;
		// if($_FILES['photo']['type']=="image/jpeg"){
			// $im=ImageCreateFromJPEG($add); 
			// $width=ImageSx($im);              // Original picture width is stored
			// $height=ImageSy($im);             // Original picture height is stored
			// $n_height=($n_width/$width) * $height; // Add this line to maintain aspect ratio
			// $newimage=imagecreatetruecolor($n_width,$n_height);                 
			// imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);
			// imagejpeg($newimage,$tsrc);
			// chmod("$tsrc",0777);
		// }
		// if($_FILES['photo']['type']=="image/png"){
			// $im=imagecreatefrompng($add); 
			// $width=ImageSx($im);              // Original picture width is stored
			// $height=ImageSy($im);             // Original picture height is stored
			// $n_height=($n_width/$width) * $height; // Add this line to maintain aspect ratio
			// $newimage=imagecreatetruecolor($n_width,$n_height);                 
			// imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);			
			// move_uploaded_file($_FILES["photo"]["tmp_name"], imagepng($newimage,$tsrc));
			// chmod("$tsrc",0777);
		// }
		// if($_FILES['photo']['type']=="image/gif"){
			// $im=imagecreatefromgif($add); 
			// $width=ImageSx($im);              // Original picture width is stored
			// $height=ImageSy($im);             // Original picture height is stored
			// $n_height=($n_width/$width) * $height; // Add this line to maintain aspect ratio
			// $newimage=imagecreatetruecolor($n_width,$n_height);                 
			// imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);
			// imagegif($newimage,$tsrc);
			// chmod("$tsrc",0777);
		// }
		
		
		
		
// Below lines are to display file name, temp name and file type , you can use them for testing your script only//////

///////////////////////////////////////////////////////////////////////////
$add="uploads/original/".$_FILES['photo']['name']; // the path with the file name where the file will be stored, upload is the directory name. 
//echo $add;
if(move_uploaded_file ($_FILES['photo']['tmp_name'],$add)){
//echo "Successfully uploaded the mage";
chmod("$add",0777);

}else{
//echo "Failed to upload file Contact Site admin to fix the problem";
exit;
}

///////// Start the thumbnail generation//////////////
$n_width=200;          // Fix the width of the thumb nail images
$n_height=200;         // Fix the height of the thumb nail imaage
////////////////////////////////////////////

$tsrc="uploads/thumb/".$_FILES['photo']['name'];   // Path where thumb nail image will be stored
//echo $tsrc;
if (!($_FILES['photo']['type'] =="image/jpeg" OR $_FILES['photo']['type']=="image/gif" OR $_FILES['photo']['type']=="image/png")){echo "Your uploaded file must be of JPG or GIF. Other file types are not allowed<BR>";
exit;}
/////////////////////////////////////////////// Starting of GIF thumb nail creation///////////
if (@$_FILES['photo']['type']=="image/gif")
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
if($_FILES['photo']['type']=="image/jpeg"){
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
if($_FILES['photo']['type']=="image/png"){
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

		if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		}else{
	 		//move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
    		$sql = "insert into contest (contest_email,contest_mobile,contest_name,contest_comment,contest_image,contest_status) values ('".$_POST["email"]."','".$_POST["phone"]."','".$_POST["state"]."','".$_POST["description"]."','".$add."','1')";// changed add to $targetfil
    		mysql_query($sql);
?>
		        <script>
		        	alert('Thanks for Participating.We will contact soon!');
		        </script>
<?php
		}
	}
?>
<?php
		// Include the random string file for captcha
		require 'includes/rand.php';
		$randomObj = new RandomGen();
		$str = $randomObj->createRandom();

		// Set the session contents
		$_SESSION['captcha_id'] = $str;
	?>
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Thozha New Movies, Movie Trailers, DVD, TV &amp; Video Game News! - thozha.net</title>
		<meta name="description" content="Check out the latest new movies coming soon to theaters &amp; video games to come to market. Read latest buzz &amp; watch exclusive trailers!"/>
		<link rel="canonical" href="http://thozha.net" />
		<link rel="next" href="http://thozha.net/" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="New Movies, Movie Trailers, DVD, TV &amp; Video Game News! - thozha.net" />
		<meta property="og:description" content="Check out the latest new movies coming soon to theaters &amp; video games to come to market. Read latest buzz &amp; watch exclusive trailers!" />
		<meta property="og:url" content="http://thozha.net" />
		<meta property="og:site_name" content="thozha.net" />
		<meta property="article:publisher" content="https://www.facebook.com/thozha" />
		<meta property="og:image" content="http://cdn3-thozha.net/assets/uploads/2015/08/logo_assets_cs.png" />
		<script type='application/ld+json'>{ "@context": "http://schema.org","@type": "WebSite","url": "http://thozha.net/","potentialAction": {"@type": "SearchAction","target": "http://thozha.net/?s={search_term}","query-input": "required name=search_term"}}</script>
		<meta name="msvalidate.01" content="4FDA7A3B5937248982778768D127CD37" />
		<meta name="p:domain_verify" content="4868adfa25d99f1e78fa2dcc91892866" />
		<link rel="canonical" href="http:/thozha.net">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		<link rel="shortcut icon" href="//a.dilcdn.com/a/favicon-94e3862e7fb9.ico">
		<meta name="google-site-verification" content="l2uHJfvECElzBCRHpqcVjgJUuPc-Mry-yL8Ry7anz6Y">
		<meta name="description" content="The official website for all things thozha: tv, shows, movies, characters, games, videos, music, shopping, and more!">
		<meta property="og:title" content="thozha.net | The official home for all things thozha">
		<meta property="og:description" content="The official website for all things thozha: tv, shows, movies, characters, games, videos, music, shopping, and more!">
		<meta property="og:type" content="website">
		<meta property="og:site_name" content="thozha">
		<meta property="og:url" content="http://thozha.net">
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<link rel="icon" href="images/fav.png"/> 
		<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
		<script src="js/base.js" type="text/javascript"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/captcha.js"></script>
		
	</head>
	<style>
		.header_area{
			background:transparent !important;
			height: 130px !important;
		    width: 100% !important;
		    z-index: 9999 !important;
		}
		.logo {
    		margin: 10px 0 0 5px !important;
		}
		@media (min-width:789px){
			.logo {
    			margin: 15px 0 0 85px !important;
			}
		}
		.visitor_count {
		    cursor: default !important;
		    left: 15px !important;
		    position: absolute !important;
		    right: 0 !important;
		    top: 40px !important;
		    width: 213px !important;
		}
		@media (min-width:789px){
			.visitor_count {
			    cursor: default !important;
			    position: absolute !important;
			    right: 126px !important;
			    top: 14px !important;
			    width: 213px !important;
			    left: auto !important;
			}
		}
		.logo img {
		    height: 65px !important;
		    width: 100px !important;
		}
		@media (min-width:789px){
			.logo img {
			    height: 65px !important;
			    width: 100px !important;
			}
		}
	</style>
	<body class="bg_form form_body">
  	<div class="contest_wrapper">
  		<header class="header_area">
            <div class="container">
                <div class="header_content">
                    <div class="row">
                        <div class="col-md-3 col-sm-2 col-xs-4">
                            <div class="logo">
                             	<a href="home.php"><img src="images/logo.png"></a>
                          	
                                <div class="navbar-header">
                                    <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"> </span>
                                        <span class="icon-bar"> </span>
                                        <span class="icon-bar"> </span>
                                    </button>  -->
                                </div><!--navbar-header-->                           
                            </div><!--logo-->
                        </div><!--col-md-3-->                                  
                        <div class="col-md-9 col-sm-10 nav_area visible-lg">
                        	<!-- <a class="contest_btn" href="form.php"><img src="images/ticket_free.png" /></a> -->
                        	<div align='center' class="visitor_count"><a>VISITORS<img src='http://www.hit-counts.com/counter.php?t=MTM4MjEzMQ==' border='0' alt='Visitor Counter'></a></div>
                        </div><!--nav_area-->
                        
                        <div class="col-md-9 col-sm-10 col-xs-8 nav_area visible-xs">
                        	
                        	<div align='center' class="visitor_count"><a>VISITORS<img src='http://www.hit-counts.com/counter.php?t=MTM4MjEzMQ==' border='0' alt='Visitor Counter'></a></div>
                        </div><!--nav_area-->
                    </div><!--row-->
                </div><!--header_content-->
            </div><!--container-->
  		</header><!--header_area-->	
    <div class="container container_form">
    	<h2>PARTICIPATE IN CON<b>TEST FOR FREE TICKETS</b></h2>
       
			<form enctype="multipart/form-data" method="post" id="tec_reg" role="form">
			<div class="form-box fl">
                <div class="form-group">
                    <label>Enter your email<p>*</p></label><br>
                    <input type="text" class="input-block-level form_align email" name='email' data-validation="email" autocomplete="off">
                	<span class="error_msg">Please enter valid email</span>
                	<span class="error_msg exist_mail">Email already exist!</span>
                </div>
                <div class="form-group">
                    <label>Enter your Mobile number<p>*</p></label><br>
                    <input type="text" maxlength="10" class="input-block-level form_align mobile_number" name='phone' data-validation="number" autocomplete="off">
                	<span class="error_msg">Mobile number should be 10 digit only!</span>
                </div>
                <div class="form-group">
                    <label>Enter City/State<p>*</p></label><br>
                    <input type="text" class="input-block-level form_align state" name='state' data-validation="number" autocomplete="off">
                    <span class="error_msg">Please enter state name or rcity!</span>
                </div>
                <div class="form-group">
	          		<label>Enter your Comments</label><br>
                    <textarea class="comment" name="description"></textarea>
                </div>
              	
                
         </div>
         <div class="uploads fl">
         	<div class="upload_info">
         		<p>UPLOAD SELFIES</p>
         	</div>
      		<div class="preview">
      			<span>Preview</span>
      			

      		</div><!--preview-->
      		<span class="error_msg">Please upload image!</span>
	         <div class="photos_upload fl">
	         	<label>UPLOAD</label>
	      		<div class="form-group photo-browse">
	                <!--<label>Upload Your Photo</label>-->
	                <input id="fileUpload" type="file" name="photo" data-validation="mime size required" data-validation-allowing="jpg, png" data-validation-max-size="2M" class="upload_selfie" >
	                <!-- <button>UPLOAD</button> -->
	               
	                <span class="error_msg">Please upload image</span>
	                 <div id="image-holder"></div>
	                 
	            </div>
	            
	   		</div><!--photos_upload-->
	   		<div class="clear_both"></div>
	   		<span class="upload_note">Hint: Upload JPG,JPEG,PNG images with 1 MB only</span>
	   		<div class="form-group captcha">
              		<img src="captcha/captcha_code_file.php?rand=<?php echo rand(); ?>" alt="" id="captcha" />
              		
              		<input name="code" type="text" id="code" autocomplete=off maxlength="6"/>
              		<img src="images/refresh.png" width="25" alt="" id="refresh" />
              		<span class="error_msg captacha_valid msg_validate" id="er_captcha_code">Please enter captcha</span>
              	</div><!-- captcha -->
      </div><!--uploads-->
      <div class="clear_both"></div>
      <div class="form-group">
      				<button type="submit" class="btn-style contest_submit" name="submit" value="submit">SUBMIT</button>
				   <button type="reset" class="btn-style contest_reset reset" name="clear" value="clear">CLEAR</button>

				   <div class="clear_both"> </div>
				</div>
   			</form>
    </div><!-- container -->
   </div><!-- contest_wrapper -->
   <script type="text/javascript">
	$(document).ready(function(){

	 function validateEmail(sEmail) {
		var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
		if (filter.test(sEmail)) {
			return true;
		}
		else {
			return false;
		}
	  }
  	$('.contest_submit').click(function(){
  		
  			var sEmail = $('.email').val();
  			
  			if (!validateEmail(sEmail) || sEmail == '') {
  				
				$('.email').next('.error_msg').addClass('db');
				return false;
			}else{
				$('.email').next('.error_msg').removeClass('db');
			}
			if($(".mobile_number").val()==''||$(".mobile_number").val().length !=10){
				$('.mobile_number').next('.error_msg').addClass('db');
				return false;
			}else{
				$('.mobile_number').next('.error_msg').removeClass('db');
			}		
			if( $(".state").val() == '' ){
				$('.state').next('.error_msg').addClass('db');
				return false;
			}else{
				$('.state').next('.error_msg').removeClass('db');
			}
			if( $("#fileUpload").val() == '' ){
				$('.preview').next('.error_msg').addClass('db');
				return false;
			}else{
				$('.preview').next('.error_msg').removeClass('db');
			}
			if($("#code").val()=='' ){
				$('.captacha_valid').addClass('db');
				return false;
			}
			
  });
    		
  $(".mobile_number").keypress(function (e) {
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
               return false;
     }
  });
   $(document).on('change','#fileUpload',function(){
          files = this.files;
          size = files[0].size;
          //max size 50kb => 50*1000
          if( size > 1000*1000){
             //alert('Please upload less than 50kb file');
             $('.preview').empty();
             $('.preview').next('.error_msg').addClass('db');
             return false;
          }
          return true;
     });
  
   $("#fileUpload").on('change',function () {
 
     //Get count of selected files
     var countFiles = $(this)[0].files.length;
 
     var imgPath = $(this)[0].value;
     var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
     var image_holder = $("#image-holder");
     image_holder.empty();
     if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
         if (typeof (FileReader) != "undefined") {
 
             //loop for each file selected for uploaded.
             for (var i = 0; i < countFiles; i++) {
 
                 var reader = new FileReader();
                 reader.onload = function (e) {
                     $("<img />", {
                         "src": e.target.result,
                             "class": "thumb-image"
                     }).appendTo(image_holder);
                 }
 
                 image_holder.show();
                 reader.readAsDataURL($(this)[0].files[i]);
             }
 
         } else {
             alert("This browser does not support FileReader.");
         }
     } else {
         $('.preview').next('.error_msg').addClass('db');
     }
     
 });
 $('.email').blur(function() {
    var emailVal = $('.email').val(); // assuming this is a input text field
    $.post('comments.php?email_check=true', {'email' : emailVal}, function(data) {
        if(data.trim()=='exist'){
        	$('.exist_mail').addClass('db');
        	$('.email').focus();
        }
        else {
        	$('.exist_mail').removeClass('db');
        }
    });
 });
 $(".reset").click(function() {
		    $(this).closest('form').find("input[type=text], textarea").val("");
		   $('#image-holder').empty();
});
$("#refresh").on("click", function() {
        var a = document.images.captcha;
        a.src = a.src.substring(0, a.src.lastIndexOf("?")) + "?rand=" + 1e3 * Math.random()
    }), 

    $("#code").keyup(function(e) {
        var t = $("#code").val();
        $.ajax({
            url: "captcha/captcha.php",
            data: "atm_j_captura=" + t + "&action=captacha",
            type: "post",
            success: function(e) {
                if ("ok" == $.trim(e)) {
                    $("#er_captcha_code").css({
                        color: "green"
                    }), $("#er_captcha_code").addClass('db').html("Valid Security Code"), $("#er_captcha_code").html("");
                    $('.contest_submit').removeAttr('disabled');
                    var t = !0;
                    return t
                }
                if ("ok" != $.trim(e)) {
                    $("#er_captcha_code").css({
                        color: "red"
                    }), $("#er_captcha_code").addClass('db').html("Invalid Security Code"), $("#code").focus();
                    $('.contest_submit').attr('disabled','disabled');
                    var t = !1;
                    return t
                }
            }
        })
    });

    $(".contest_submit").on("click", function() {     
    // if ($("#er_captcha_code").html(""), "Invalid Security Code" == $("#er_captcha_code").html()) return alert("Please Enter Valid Security Code"), $("#code").val(""), $("#er_captcha_code").html(""), $("#code").focus(), !1;
 });

 	});
   	</script>
	</body>
</html>