$(document).ready(function () {
	var the_height = $(window).innerHeight();
	var the_width = $(window).innerWidth();
	$('.left_img').css({'height':the_height});
	
    package_menu();
    package_menu_1();
     $(".view_gallery> span").hover(function(){
	  $('.color_gallery> div').hide(); 
	  $(this).addClass('view_glallery_opacity');
	  $(this).siblings().removeClass('view_glallery_opacity');
	 });

	 $(".view_gallery> span").hover(function(){
		  $(this).siblings('div:visible').hide();
		 
		  $(this).next().fadeIn('fast');
		  return false
		  }, function(){
	  });
	  	
     	$(".slider_show").on('click',function(){
        // $(".social_link_holder").toggle(150);
        $(".slider_show").css({'right':'45px'});
        $(".slider").css({'right':'0px'});
        $(".slider").show();
        $(".slider_show").addClass('slider_hide');
        $(".social_links").removeClass('slider_show');
        
     });
     
     $(".slider_hide").on('click',function(){
     	alert('test');
        // $(".social_link_holder").toggle(150);
        // $(".slider").hide();
        // $(".slider_show").css({'right':'0px'});
        $(".slider").css({'right':'-45px','display':'none'});
        
        $(".slider_show").addClass('slider_hide');
        $(".social_links").removeClass('slider_show');
     });
     	
});

$(window).resize(function () {
    var the_height = $(window).innerHeight();
	var the_width = $(window).innerWidth();
	$('.left_img').css({'height':the_height});
	
    package_menu();
    package_menu_1();
});

function package_menu() {
    var wh = window.innerHeight - 20;
    var smh = wh - 130;
     $('.home_body').css({'height': wh + 'px'});
     $('.container_bg').css({'height': smh + 'px'});
}

function package_menu_1() {
    var wh = window.innerHeight;
    var smh = wh - 30;
     $('.form_body').css({'height': wh + 'px'});
}




