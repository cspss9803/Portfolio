$(document).ready(function(){
    $('#nav_click_area').click(function(){
        $('main>aside').css({transform:"translateX(0px)"});
        $('#cover').fadeIn(400);
        $('body').css({'overflow':'hidden'});
    });
    $('#cover,.nav_close_button,.side_menu a').click(function(){
        $('main>aside').css({transform:"translateX(-100%)"});
        $('#cover').fadeOut(400);
        $('body').css({'overflow':'auto'});
    });
//-----------------------------------------------------------
    $(window).scroll(function() {
        if($(this).scrollTop() > 400){
            $('.TopBotton').stop().fadeIn(700);
        } else {
            $('.TopBotton').stop().fadeOut(700);
        }
    });
});