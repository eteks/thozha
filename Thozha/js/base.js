$(document).ready(function () {
    package_menu();
    package_menu_1();
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
    var wh = window.innerHeight - 100;
    var smh = wh - 30;
     $('.form_body').css({'height': wh + 'px'});
}




