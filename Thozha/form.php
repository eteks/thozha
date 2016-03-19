<?php
session_start();
?>
<?php 
	include('dbcon.php');
	
	if (isset($_POST["submit"])) {
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["photo"]["name"]);
		$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
		$check = getimagesize($_FILES["photo"]["tmp_name"]);
		if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		}else{
	 		move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
    		$sql = "insert into contest (contest_email,contest_mobile,contest_name,contest_comment,contest_image,contest_status) values ('".$_POST["email"]."','".$_POST["phone"]."','".$_POST["state"]."','".$_POST["description"]."','".$target_file."','1')";
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
        <title>Thozha New Movies, Movie Trailers, DVD, TV &amp; Video Game News! - ComingSoon.net</title>
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
		<style>
			img#refresh{
			float:left;
			margin-top:30px;
			margin-left:4px;
			cursor:pointer;
		}
		</style>
	</head>
	<body class="bg_form form_body">
	
  	<div class="contest_wrapper">	
    <div class="container container_form">
    	<h2>PARTICIPATE IN CON<b>TEST FOR FREE TICKETS</b></h2>
       <div class="form-box fl">
			<form enctype="multipart/form-data" method="post" id="tec_reg" role="form">
                <div class="form-group">
                    <label>Enter your email*</label><br>
                    <input type="text" class="input-block-level form_align email" name='email' data-validation="email" autocomplete="off">
                	<span class="error_msg">Please enter valid email</span>
                </div>
                <div class="form-group">
                    <label>Enter your Mobile number*</label><br>
                    <input type="text" class="input-block-level form_align mobile_number" name='phone' data-validation="number" autocomplete="off">
                	<span class="error_msg">Mobile number should be 10 digit only!</span>
                </div>
                <div class="form-group">
                    <label>Enter City/State*</label><br>
                    <input type="text" class="input-block-level form_align state" name='state' data-validation="number" autocomplete="off">
                    <span class="error_msg">Please enter state name or rcity!</span>
                </div>
                <div class="form-group">
	          		<label>Enter your Comments</label><br>
                    <textarea class="comment" name="description"></textarea>
                </div>
              	<div class="form-group">
              		<img src="get_captcha.php" alt="" id="captcha" />
              		
              		<input name="code" type="text" id="code" autocomplete=off maxlength="6"/>
              		<img src="images/refresh.jpg" width="25" alt="" id="refresh" />
              		<span class="error_msg captacha_valid">please enter valid captcha</span>
              	</div>
                <div class="form-group">
				   <button type="submit" class="btn-style pull-right contest_submit" name="submit" value="submit">SUBMIT</button>
				</div>
         </div>
         <div class="uploads fl">
         	<div class="upload_info">
         		<p>UPLOAD SELFIES</p>
         	</div>
      		<div class="preview">
      			<span>Preview</span>
      			

      		</div><!--preview-->
      		<span class="error_msg">please upload image as jpeg,jpg and png with 1 MB.</span>
	         <div class="photos_upload fl">
	         	<label>UPLOAD</label>
	      		<div class="form-group photo-browse">
	                <!--<label>Upload Your Photo</label>-->
	                <input id="fileUpload" type="file" name="photo" data-validation="mime size required" data-validation-allowing="jpg, png" data-validation-max-size="2M" class="upload_selfie" >
	                <!-- <button>UPLOAD</button> -->
	                 <div id="image-holder"></div>
	                 
	            </div>
	   		</div><!--photos_upload-->
      </div><!--uploads-->

       </form>
    </div><!-- container -->
   </div><!-- contest_wrapper -->
   <script>
  $(document).ready(function(){
  	$('#code').blur(function(){
  		var code = $(this).val();
  		  $.ajax({
             type: "POST",
             url: "comments.php?captcha_check=true",
             data: {'code':code},
             cache: false,
             success: function(data) {
             	if(data.trim() == 'invalid'){
             		$('.captacha_valid').show();
             	}else{
             		$('.captacha_valid').hide();
             	}
             }
             
         });
  	
  	});
  	$('#refresh').click(function() {  
			
			change_captcha();
	 });
	 
	 function change_captcha()
	 {
	 	
	 	document.getElementById('captcha').src="get_captcha.php?rnd=" + Math.random();
	 }
	 
	 function clear_form()
	 {
	 	$("#name").val('');
		$("#email").val('');
		$("#message").val('');
	 }
  	$('.contest_submit').click(function(){
  		var sEmail = $('.email').val();
		// Checking Empty Fields
		if ($.trim(sEmail).length == 0) {
			//alert('Email, Mobile and city fields are mandatory');
			//e.preventDefault();
			$('.error_msg').css({'display':'block'});
			return false;
		}
		else if ($(".mobile_number").val()==""){
			$('.error_msg').css({'display':'block'});
			return false;
		}
		else if ( $(".state").val()=="" ){
			return false;
		}
		else if ($('#uploadImage').val() == ''){
			return false;
		}
		else if (!validateEmail(sEmail)) {
			$('.error_msg').css({'display':'block'});
			//alert('Invalid Email Address');
			//e.preventDefault();
			return false;
		}else if($('.mobile_number').val().length != 10 ){
			$('.error_msg').css({'display':'block'});
			//alert('Mobile number should be 10 digit only!');
			return false;
			
		}else{
			return true;
		}
		
	});
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
             alert('Please upload less than 50kb file');
             $('#image-holder').empty();
             return false;
          }
          return true;
     });
  function validateEmail(sEmail) {
	var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
		if (filter.test(sEmail)) {
			return true;
		}
		else {
			return false;
		}
  }
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
         alert("Pls select only images");
     }
     
 });
   	</script>
	</body>
	
</html>