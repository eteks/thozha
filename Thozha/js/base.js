$(document).ready(function () {
	$(function blink() { 
    $('.blink_me').fadeOut(800).fadeIn(800, blink); 
	});
	var the_height = $(window).innerHeight();
	var the_width = $(window).innerWidth();
	$('.left_img').css({'height':the_height});
	
     package_menu();
     package_menu_1();
    $(document).on('mouseover','.view_gallery> span',function(){
     //$(".view_gallery> span").hover(function(){
	  $('.color_gallery> div').hide(); 
	  $(this).addClass('view_glallery_opacity');
	  $(this).siblings().removeClass('view_glallery_opacity');
	 });
	 //$(".view_gallery> span").hover(function(){
	 $(document).on('mouseover','.view_gallery> span',function(){
		  $(this).siblings('div:visible').hide();
		  $(this).next().fadeIn('fast');
		  return false;
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
     
      $('.categories_list li').on('click',function() {
    	$('.categories_list li').removeClass('selected');
	    $(this).addClass('selected');
	});

     //code added by muthu for related image shows based on category
     $('.category_rel').click(function() {
     	var dataid = $(this).attr('data-cate');
		$.ajax({
             type: "POST",
             url: "comments.php?category_rel=true",
             data: {'data_id':dataid},
             cache: false,
             dataType:'json',
             success: function(data) {
             	$('.view_gallery').empty();
             	$.each(data,function(i){
             		if(i== 0){
             			$('.product_angle').empty().append('<img src="admin/uploads/original/'+data[i].image+'" alt="" />');
             			$('.view_gallery').append('<span class="view_glallery_opacity"><img src="admin/uploads/thumb/'+data[i].image+'" alt="" /></span><div><img src="admin/uploads/original/'+data[i].image+'" alt=""/></div>');
             		 }else{
             			$('.view_gallery').append('<span><img src="admin/uploads/thumb/'+data[i].image+'" alt="" /></span><div><img src="admin/uploads/original/'+data[i].image+'" alt=""/></div>');
             		 }
             		
             	});
			   
             }
  		});
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



