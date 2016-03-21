<?php
include('dbcon.php');
//Social media
function facebook_count($url){
 
    // Query in FQL
    $fql  = "SELECT share_count, like_count, comment_count ";
    $fql .= " FROM link_stat WHERE url = '$url'";
 
    $fqlURL = "https://api.facebook.com/method/fql.query?format=json&query=" . urlencode($fql);
 
    // Facebook Response is in JSON
    $response = file_get_contents($fqlURL);
    return json_decode($response);
 
}
$fb = facebook_count('https://www.facebook.com/thozhatamilmovie');
 
// facebook share count
//echo $fb[0]->share_count;
 
// facebook like count
//echo $fb[0]->like_count;
 
// facebook comment count
//echo $fb[0]->comment_count; 
//************************Twitter************************//
$tw_username = 'ThozhaMovie'; 
$data = file_get_contents('https://cdn.syndication.twimg.com/widgets/followbutton/info.json?screen_names='.$tw_username); 
$parsed =  json_decode($data,true);
$tw_followers =  $parsed[0]['followers_count'];
//youtube

// $video_ID = 'EaxHnDbsfws';
// $json_output = file_get_contents("http://gdata.youtube.com/feeds/api/videos/EaxHnDbsfws?v=2&alt=json");
// $json = json_decode($json_output, true);
// //This gives you the video views count
// $view_count = $json['entry']['yt$statistics']['viewCount'];
// echo $view_count; 
?>
<!DOCTYPE html>
<!-- Microdata markup added by Google Structured Data Markup Helper. -->
<html lang="en"><!-- <![endif] --><head>
		<meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Thozha</title>
		<meta name="description" content="Check out the latest new movies coming soon to theaters & video games to come to market. Read latest buzz & watch exclusive trailers!"/>
		<link rel="canonical" href="http://thozha.net"/>
		<link rel="next" href="http://thozha.net"/>
		<meta property="og:locale" content="en_US"/>
		<meta property="og:type" content="website"/>
		<meta property="og:title" content="New Movies, Movie Trailers, DVD, TV & Video Game News! - thozha.net"/>
		<meta property="og:description" content="Check out the latest new movies coming soon to theaters & video games to come to market. Read latest buzz & watch exclusive trailers!"/>
		<meta property="og:url" content="http://thozha.net"/>
		<meta property="og:site_name" content="thozha.net"/>
		<meta property="article:publisher" content="https://www.facebook.com/thozha"/>
		<meta property="og:image" content="http://cdn3-thozha.net/assets/uploads/2015/08/logo_assets_cs.png"/>
		<script type="application/ld+json"></script>
		<meta name="msvalidate.01" content="4FDA7A3B5937248982778768D127CD37"/>
		<meta name="p:domain_verify" content="4868adfa25d99f1e78fa2dcc91892866"/>
		<link rel="canonical" href="http:/thozha.net"/>
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
		<meta name="google-site-verification" content="l2uHJfvECElzBCRHpqcVjgJUuPc-Mry-yL8Ry7anz6Y"/>
		<meta name="description" content="The official website for all things thozha: tv, shows, movies, characters, games, videos, music, shopping, and more!"/>
		<meta property="og:title" content="thozha.net | The official home for all things thozha"/>
		<meta property="og:description" content="The official website for all things thozha: tv, shows, movies, characters, games, videos, music, shopping, and more!"/>
		<meta property="og:type" content="website"/>
		<meta property="og:site_name" content="thozha"/>
		<meta property="og:url" content="http://thozha.net"/>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="css/jquery-comments.css"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<link rel="icon" href="images/fav.png"/> 
		<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/jquery-comments.js"></script>
		<script src="js/base.js" type="text/javascript"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
		<script src="js/mrova-feedback-form.js" type="text/javascript"></script>
		
		<script type="text/javascript">
			$(function() {
			$('#comments-container').comments({
			
			    profilePictureURL: 'https://app.viima.com/static/media/user_profiles/user-icon.png',
		    	roundProfilePictures: true,
				textareaRows: 1,
				enableReplying: false,
				enableUpvoting: false,
				enableEditing: false,
				fieldMappings: {
			       fullname: 'anonymous',
    		    },
				refresh: function() {
        			$('#comments-container').addClass('rendered');
    			},
			    postComment: function(commentJSON, success, error) {
			        $.ajax({
			            type: 'post',
			            url: '/Thozha/comments.php?post_comment=true',
			            data: commentJSON,
			            success: function(comment) {
			                success(commentJSON);
			                //location.reload();
			            },
			            error: error
			        });
    		  },
    		  getComments: function(success, error) {
			        $.ajax({
			            type: 'get',
			            url: '/Thozha/comments.php?get_comments=true',
			            success: function(data) {
			            	var commentsArray = $.parseJSON(data);
			                success(commentsArray)
			            },
			            error: error
			        });
    		  }
    		
			});
		});
		</script>
	</head>
		<body class="home_body bg_home">	
<span itemscope itemtype="http://schema.org/Movie"><header class="header_area">
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
                        	<a class="contest_btn" href="form.php" target="_blank"><img src="images/ticket_free.png" /></a>
                        	<div align='center' class="visitor_count"><a>VISITORS<img src='http://www.hit-counts.com/counter.php?t=MTM4MjEzMQ==' border='0' alt='Visitor Counter'></a></div>
                        </div><!--nav_area-->
                        
                        <div class="col-md-9 col-sm-10 col-xs-8 nav_area visible-xs">
                        	<a class="contest_btn" href="form.php" target="_blank"><img src="images/ticket_mbl.png" /></a>
                        	<div align='center' class="visitor_count"><a>VISITORS<img src='http://www.hit-counts.com/counter.php?t=MTM4MjEzMQ==' border='0' alt='Visitor Counter'></a></div>
                        </div><!--nav_area-->
                    </div><!--row-->
                </div><!--header_content-->
            </div><!--container-->
  		</header><!--header_area-->
  		
  		<!-- <div id="mrova-feedback">
		<div id="mrova-form">
			<ul class="social_links">
				<li class="face"></li>
				<li class="yt"></li>
				<li calss="tw"></li>
			</ul> 
		</div>
		<div id="mrova-img-control"></div>
		</div> -->
		
       <div class="wrapper">
       	<!-- <div class="slider_holder">
       	<div class="slider">
			<div><a class="icon1" target="_blank" href="https://www.facebook.com/thozhatamilmovie"></a></div>
			<div><a class="icon2" target="_blank" href="https://www.youtube.com/channel/UCHDR6dL_xHlkIlsuF3dlNYQ"></a></div>
			<div><a class="icon3" target="_blank" href="https://twitter.com/thozhamovie"></a></div>
		</div>
		<div class="social_links slider_show"> </div><!-- social_links -->
        <!-- </div><!-- slider_holder --> 
        <div class="container container_bg">
         <?php
           		$sql1 = "select * from related_video order by related_video_id desc limit 1";
           		$query1 = mysql_query($sql1);
           		while($row1= mysql_fetch_array($query1)){
           		?>
           <div class="video_holder fl visible-lg desktop_video">
           		<iframe width="623" height="340" src="https://www.youtube.com/embed/<?php echo $row1['video_url'] ?>" frameborder="0" allowfullscreen></iframe>
           </div><!-- video_holder -->
           <div class="video_holder fl visible-xs mobile_video">
           		<iframe width="260" height="200" src="https://www.youtube.com/embed/<?php echo $row1['video_url'] ?>" frameborder="0" allowfullscreen></iframe>
           </div><!-- video_holder https://www.youtube-nocookie.com/embed/J9pvhzgeKZE-->
          
           		<?php
           		}
           		?>
           <div class="related_vedios fl"> 
           	<h2>RELATED <b>VIDEOS</b></h2>
           	<ul>
           		<?php
           		$sql = "select * from related_video order by related_video_id desc limit 3";
           		$query = mysql_query($sql);
           		while($row= mysql_fetch_array($query)){
					$content = file_get_contents("http://youtube.com/get_video_info?video_id=".$row['video_url']);
					parse_str($content, $ytarr);
           		?>
           		<li>
           			<div class="related_vedios_holder">
           				<div class="image_poster fl" data_url = "https://www.youtube.com/embed/<?php echo $row['video_url']; ?>">
           					<a><img src="http://img.youtube.com/vi/<?php echo $row['video_url'] ?>/3.jpg"/></a>
           				</div><!-- image_poster -->
           				<div class="image_info fl" data_url = "https://www.youtube.com/embed/<?php echo $row['video_url']; ?>">
           					<h3><a><?php  echo $ytarr['title']; ?></a></h3>
           					<span></span>
           				</div>
           				<div class="clear_both"> </div>
           			</div><!-- related_vedios_holder -->
           		</li>
           		<?php
           		}
           		?>
        
           	</ul>
           </div><!-- related_vedios -->
           <div class="clear_both"> </div>
           <div class="video_description">
           	<div class="desc_img fl">
           		<img src="images/image.png"/>
           	</div><!--desc_img-->
           	<div class="desc_content fl">
           			<h2><b>THOZHA</b> </h2>
           		<p>
           			Oopiri in Telugu, titled Thozha in Tamil, is an upcoming Indian Telugu-Tamil comedy-drama film directed by 
<span itemprop="director" itemscope itemtype="http://schema.org/Person">
<span itemprop="name">Vamsi</span> </span>Paidipally. Produced by Prasad V Potluri in both Telugu and Tamil languages, the film features Nagarjuna Akkineni and 
<span itemprop="actor" itemscope itemtype="http://schema.org/Person">
<span itemprop="name">Karthi</span> </span>playing the male leads, while Tamannaah plays the female lead. Slight differences exist in the supporting cast between both versions. Gopi Sunder composes the film's music. Production began on 11 February 2015 in Hyderabad and principal photography began on 16 March 2015 at Chennai. The film is scheduled for a worldwide release on 
<span itemprop="datePublished" content="Please insert valid ISO 8601 date/time here. Examples: 2015-07-27 or 2015-07-27T15:30">25 March 2016.</span>
           		</p>
           	</div><!--desc_content-->
           	<div class="rating_holder fl">
           		<div class="col-md-4 col-sm-4 col-xs-3 fix_p_l">
					<div class="single_social_share facebook">
					   <a href="https://www.facebook.com/thozhatamilmovie" target="_blank"><i class="fa fa-facebook social_font"></i></a>
					   <a class="background_none" href="https://www.facebook.com/thozhatamilmovie" target="_blank"><span class="counter">Likes <b>650<?php //echo $fb[0]->like_count;?></b></span></a>
					   </div>
					  </div>
					
					<div class="col-md-4 col-sm-4 col-xs-3 fix_p_l">
					
					<div class="single_social_share twitter">
					 <a href="https://twitter.com/thozhamovie" target="_blank"><i class="fa fa-twitter social_font"></i></a>
					 <a class="background_none" href="https://twitter.com/thozhamovie" target="_blank"><span class="counter">Followers <b><?php echo $tw_followers; ?></b></span></a>
					      </div>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-3 fix_p_l">
					
					<div class="single_social_share youtube">
					   <a href="https://www.youtube.com/channel/UCHDR6dL_xHlkIlsuF3dlNYQ" target="_blank"><i class="fa fa-youtube social_font"></i></a>
					   <a class="background_none" href="https://www.youtube.com/channel/UCHDR6dL_xHlkIlsuF3dlNYQ" target="_blank"><span class="counter">Views <b>569743</b></span></a> </div>
					</div>

           		<!-- <h5>Critics Rating:</h5>
           			<span>
           				<form class="rating-form" action="#" method="post" name="rating-movie">
						  <fieldset class="form-group">
						    <legend class="form-legend">Rating:</legend>
						    <div class="form-item">
						      
						      <input id="rating-5" name="rating" type="radio" value="5" />
						      <label for="rating-5" data-value="5">
						        <span class="rating-star">
						          <i class="fa fa-star-o"></i>
						          <i class="fa fa-star"></i>
						        </span>
						        <span class="ir">5</span>
						      </label>
						      <input id="rating-4" name="rating" type="radio" value="4" />
						      <label for="rating-4" data-value="4">
						        <span class="rating-star">
						          <i class="fa fa-star-o"></i>
						          <i class="fa fa-star"></i>
						        </span>
						        <span class="ir">4</span>
						      </label>
						      <input id="rating-3" name="rating" type="radio" value="3" />
						      <label for="rating-3" data-value="3">
						        <span class="rating-star">
						          <i class="fa fa-star-o"></i>
						          <i class="fa fa-star"></i>
						        </span>
						        <span class="ir">3</span>
						      </label>
						      <input id="rating-2" name="rating" type="radio" value="2" />
						      <label for="rating-2" data-value="2">
						        <span class="rating-star">
						          <i class="fa fa-star-o"></i>
						          <i class="fa fa-star"></i>
						        </span>
						        <span class="ir">2</span>
						      </label>
						      <input id="rating-1" name="rating" type="radio" value="1" />
						      <label for="rating-1" data-value="1">
						        <span class="rating-star">
						          <i class="fa fa-star-o"></i>
						          <i class="fa fa-star"></i>
						        </span>
						        <span class="ir">1</span>
						      </label>
						      
						      <!-- <div class="form-action">
						        <input class="btn-reset" type="reset" value="Reset" />   
						      </div> -->
						
						      <!-- <div class="form-output">
						        ? / 5
						      </div>
						      
						    </div>
						    
						  </fieldset>
						</form>
           			</span>
           			<br> -->
           			<!-- <h5>Avg.Readers Rating</h5>
           			<span>
           				<form class="rating-avg" action="#" method="post" name="rating-movie">
						  <fieldset class="form-group">
						    <legend class="form-legend-avg">Rating:</legend>
						    <div class="form-item-avg">
						      
						      <input id="rating-5" name="rating" type="radio" value="5" />
						      <label for="rating-5" data-value="5">
						        <span class="rating-star">
						          <i class="fa fa-star-o"></i>
						          <i class="fa fa-star"></i>
						        </span>
						        <span class="ir">5</span>
						      </label>
						      <input id="rating-4" name="rating" type="radio" value="4" />
						      <label for="rating-4" data-value="4">
						        <span class="rating-star">
						          <i class="fa fa-star-o"></i>
						          <i class="fa fa-star"></i>
						        </span>
						        <span class="ir">4</span>
						      </label>
						      <input id="rating-3" name="rating" type="radio" value="3" />
						      <label for="rating-3" data-value="3">
						        <span class="rating-star">
						          <i class="fa fa-star-o"></i>
						          <i class="fa fa-star"></i>
						        </span>
						        <span class="ir">3</span>
						      </label>
						      <input id="rating-2" name="rating" type="radio" value="2" />
						      <label for="rating-2" data-value="2">
						        <span class="rating-star">
						          <i class="fa fa-star-o"></i>
						          <i class="fa fa-star"></i>
						        </span>
						        <span class="ir">2</span>
						      </label>
						      <input id="rating-1" name="rating" type="radio" value="1" />
						      <label for="rating-1" data-value="1">
						        <span class="rating-star">
						          <i class="fa fa-star-o"></i>
						          <i class="fa fa-star"></i>
						        </span>
						        <span class="ir">1</span>
						      </label>
						       -->
						      <!-- <div class="form-action">
						        <input class="btn-reset" type="reset" value="Reset" />   
						      </div> -->
						
						      <!-- <div class="form-output-avg">
						        ? / 5
						      </div>
						      
						    </div>
						    
						  </fieldset>
						</form>
           			</span>
           			<br> --> 
           			
           	</div><!--rating_holder-->
           </div><!--video_description-->
           <div class="related_photos fl hidden-lg hidden-md hidden-sm">
           			<h2>RELATED <b>PHOTOS</b></h2>
           			<ul class="categories_list">
           			<li class="category_rel selected" data-cate='0'>All</li>
           			<?php
		           					$sql6 = "select * from category";
	           						$query6 = mysql_query($sql6);
		           					$k=1;	
		           					while($row6= mysql_fetch_array($query6)){
		           	
       							?>
		               <li class="category_rel" data-cate='<?php echo $row6['category_id']; ?>'><?php echo $row6['category_name']; ?></li>
		               <?php
                     				$k++;
                    				}
                     			?>
                     	</ul>
           			<div class="photos_holder">
           	<div class="idp_shoe_gallery">
              <div id="product_angle">
                  <?php
			           		$sql2 = "select * from related_image order by related_image_id desc limit 1";
			           		$query2 = mysql_query($sql2);
			           		while($row2= mysql_fetch_array($query2)){
           				?>
                  <img src="admin/uploads/original/<?php echo $row2['image']; ?>" alt="" />    
                   <?php
                        }
                     ?>                                          </div><!-- product_angle -->
                 <div class="idp_views_tab">
                     <div class="view_gallery" id="black" style="display:block;">
                         <?php
			           		$sql3 = "select * from related_image order by related_image_id desc limit 9";
			           		$query3 = mysql_query($sql3);
			           			$j=1;	
			           		while($row3= mysql_fetch_array($query3)){
			           	
           				?>
                         <span <?php if($j==1){ echo "class='view_glallery_opacity'"; }?>><img src="admin/uploads/thumb/<?php echo $row3['image']; ?>" alt="" /></span>
                         <div><img src="admin/uploads/original/<?php echo $row3['image']; ?>" alt="" /></div>
                         <?php
                         $j++;
                        }
                         ?>
               
                     </div><!-- view_gallery -->
                     <div class="clear_both"></div>
                 </div><!-- idp_views_tab -->
                 <div class="clear_both"></div>
            </div><!--  -->
           			</div><!--photos_holder-->
           </div><!--related_photos-->
           <!-- <div class="comment_heading">
           	<h2>POST YOUR<b>COMMENTS</b></h2>
           </div> -->
           
           <div class="video_comment fl" id="comments-container">
           		<span itemprop="author" itemscope itemtype="http://schema.org/Person">
       			<span itemprop="name">nagarjuna</span> 
           </div><!--video_comment-->
          
			<div class="related_photos fl visible-lg visible-md visible-sm">
       			<h2>RELATED <b>PHOTOS</b></h2>
       			
       			<ul class="categories_list">
       				<li class="category_rel selected" data-cate='0'>All</li>
       					<?php
		           					$sql6 = "select * from category";
	           						$query6 = mysql_query($sql6);
		           					$k=1;	
		           					while($row6= mysql_fetch_array($query6)){
		           	
       							?>
		               <li class="category_rel " data-cate='<?php echo $row6['category_id']; ?>'><?php echo $row6['category_name']; ?></li>
		               <?php
                     				$k++;
                    				}
                     			?>
              		</ul>
				<div class="photos_holder">
       				<div class="idp_shoe_gallery">
          				<div id="product_angle" class="product_angle">
              				<?php
		           				$sql4 = "select * from related_image order by related_image_id desc limit 1";
	           					$query4 = mysql_query($sql4);
		           				while($row4= mysql_fetch_array($query4)){
   							?>
              				<img src="admin/uploads/original/<?php echo $row4['image']; ?>" alt="" />    
               				<?php
                    			}
     						?>                                          	
 						</div><!-- product_angle -->
             			<div class="idp_views_tab">
                 			<div class="view_gallery" id="black" style="display:block;">
                     			<?php
		           					$sql5 = "select * from related_image order by related_image_id desc limit 9";
	           						$query5 = mysql_query($sql5);
		           					$j=1;	
		           					while($row5= mysql_fetch_array($query5)){
		           	
       							?>
                     			<span <?php if($j==1){ echo "class='view_glallery_opacity'"; }?>><img src="admin/uploads/thumb/<?php echo $row5['image']; ?>" alt="" /></span>
                     			<div><img src="admin/uploads/original/<?php echo $row5['image']; ?>" alt="" /></div>
                     			<?php
                     				$j++;
                    				}
                     			?>
                 			</div><!-- view_gallery -->
             				<div class="clear_both"></div>
             			</div><!-- idp_views_tab -->
         				<div class="clear_both"></div>
        			</div><!--  -->
       			</div><!--photos_holder-->
       		</div><!--related_photos-->
		</div><!-- container -->
		
		
        
	</div><!--wrapper-->
		<div class="footer fl">
           	<span>© 2016 THOZHA. ALL RIGHTS RESERVED</span>
           	<p><a href="http://www.atomicka.com" target="_blank">Empowered by Infom Atomicka.</a></p>
     </div><!--footer-->
		<script type="text/javascript">
			$(document).ready(function(){
				$('.image_poster').click(function(){
				    var id = $(this).attr('data_url');
				    $('.desktop_video').empty().prepend('<iframe width="623" height="340" src="'+id+'" frameborder="0" allowfullscreen></iframe>');
				    $('.mobile_video').empty().prepend('<iframe width="260" height="200" src="'+id+'" frameborder="0" allowfullscreen></iframe>');
	
				});
				$('.image_info	').click(function(){
					var id = $(this).attr('data_url');
				    $('.desktop_video').empty().prepend('<iframe width="623" height="340" src="'+id+'" frameborder="0" allowfullscreen></iframe>');
				    $('.mobile_video').empty().prepend('<iframe width="260" height="200" src="'+id+'" frameborder="0" allowfullscreen></iframe>'); 
				});
				$('.categories_list li').on('click',function() {
     				$('.categories_list li').removeClass('selected');
     				$(this).addClass('selected');
 				});
			});
			
		</script>
<aside id="sticky-social">
    <ul>
        <li><a href="#" class="fa fa-facebook" target="_blank"><span>Facebook</span></a></li>
        <li><a href="#" class="fa fa-twitter" target="_blank"><span>Twitter</span></a></li>
        <li><a href="#" class="fa fa-youtube" target="_blank"><span>You tube</span></a></li>
    </ul>
</aside>
	</body><!-- Syntax Highlighter -->
</html>