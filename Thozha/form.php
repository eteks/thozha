<?php 
	include('dbcon.php');
	if (isset($_POST["submit"])) {
		//***************commented by muthu for admin purpose***************//
	    // $target_dir = "uploads/";
	    // $target_file = $target_dir . basename($_FILES["photo"]["name"]);
	    // $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
	    // $check = getimagesize($_FILES["photo"]["tmp_name"]);
	    // if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
	        // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    // }else{
	    	 // move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
	        // $sql = "insert into contest (contest_email,contest_mobile,contest_comment,contest_image,contest_status) values ('".$_POST["email"]."','".$_POST["phone"]."','".$_POST["description"]."','".$target_file."','1')";
	        // mysql_query($sql);
	        ?>
	        <script>
	        	alert('Thanks for Participating.We will contact soon!');
	        </script>
	        <?php
	    //}
	}
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
		<link rel="next" href="http://thozha.net/page/2" />
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
		<script type="text/javascript" src="easy-comment/jquery.easy-comment.js"></script>
		<script src="js/base.js" type="text/javascript"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
	</head>
	<body class="bg_form form_body">
	<header class="header_area">
            <div class="container">
                <div class="header_content">
                    <div class="row">
                        <div class="col-md-3 col-sm-2">
                            <div class="logo">
                             	<a href="index.html"><img src="images/logo.png"></a>
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
                        <div class="col-md-9 col-sm-10 nav_area">
                            <nav class="main_menu">
                                <div class="navbar-collapse collapse"> 
                                    <ul class="nav navbar-nav navbar-right">
                                    	<!-- <li><div align='center'><a href='http://www.hit-counts.com'><img src='http://www.hit-counts.com/counter.php?t=MTM4MjEzMQ==' border='0' alt='Visitor Counter'></a></div></li>
                                        <li><img src="images/ticket_free.png" /></li> -->
                                        <!-- <li>REGISTER</li> -->
                                    </ul>                                                     
                                </div><!--collapse-->
                            </nav><!--main_menu->
                        </div><!--nav_area-->
                    </div><!--row-->
                </div><!--header_content-->
            </div><!--container-->
  		</header><!--header_area-->
  	<div class="contest_wrapper">	
    <div class="container container_form">
    	<h2>PARTICIPATED IN CON<b>TEST FOR FREE TICKETS</b></h2>
       <div class="form-box fl">
			<form enctype="multipart/form-data" method="post" id="tec_reg" role="form">
                <div class="form-group">
                    <label>Enter your email</label><br>
                    <input type="email" class="input-block-level form_align" name='email' data-validation="email">
                </div>
                <div class="form-group">
                    <label>Enter your Mobile number</label><br>
                    <input type="text" class="input-block-level form_align" name='phone' data-validation="number">
                </div>
                <div class="form-group">
	          		<label>Comments</label><br>
                    <textarea name="description"></textarea>
                </div>
              	
                <div class="form-group">
				   <button type="submit" class="btn-style pull-right" name="submit" value="submit">SUBMIT</button>
				</div>
         </div>
         <div class="photos_upload fl">
      		<div class="form-group">
                <!--<label>Upload Your Photo</label>-->
                <input id="fileUpload" type="file" name="photo" data-validation="mime size required" data-validation-allowing="jpg, png" data-validation-max-size="2M" class="upload_selfie">
                <!-- <button>UPLOAD</button> -->
                 <!-- <div id="image-holder"></div>-->
            </div>
       </div><!--photos_upload-->
    </div><!-- container -->
   </div><!-- contest_wrapper -->
   <script>
   //***************commented by muthu for admin purpose***************//
   		// $("#fileUpload").on('change',function () {
//  
     // //Get count of selected files
     // var countFiles = $(this)[0].files.length;
//  
     // var imgPath = $(this)[0].value;
     // var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
     // var image_holder = $("#image-holder");
     // image_holder.empty();
     // if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
         // if (typeof (FileReader) != "undefined") {
//  
             // //loop for each file selected for uploaded.
             // for (var i = 0; i < countFiles; i++) {
//  
                 // var reader = new FileReader();
                 // reader.onload = function (e) {
                     // $("<img />", {
                         // "src": e.target.result,
                             // "class": "thumb-image"
                     // }).appendTo(image_holder);
                 // }
//  
                 // image_holder.show();
                 // reader.readAsDataURL($(this)[0].files[i]);
             // }
//  
         // } else {
             // alert("This browser does not support FileReader.");
         // }
     // } else {
         // alert("Pls select only images");
     // }
 // });
   	</script>
	</body>
	
</html>