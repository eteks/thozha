$(document).ready(function () {
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
});

$(window).resize(function () {
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




