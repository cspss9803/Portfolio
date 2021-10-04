$(document).ready(function(){
    $(function(){
        $('nav>ul>li:nth-child(2)').mouseenter(function(){
            $('nav>ul>li:nth-child(2)>.options_box').fadeIn(400);
        });
        $('nav>ul>li:nth-child(2)').mouseleave(function(){
            $('nav>ul>li:nth-child(2)>.options_box').fadeOut(200);
        });
 //--------------------------------------------------------------------       
        //捲動到 "前言"
        var section_1 = $('main>section:nth-child(1)').offset().top;
        $('nav>ul>li:nth-child(1)').click(function(){
            $('body,html').stop().animate({
                scrollTop: section_1 + 10
            },700);
        });
        $('#start').click(function(){
            $('body,html').stop().animate({
                scrollTop: section_1 + 10
            },700);
        });

        //捲動到 "植栽介紹"
        var section_2 = $('main>section:nth-child(2)').offset().top;
        var section_2_2 = $('main>section:nth-child(2)>section:nth-child(3)').offset().top;
        $('nav>ul>li:nth-child(2)>span').click(function(){
            $('body,html').stop().animate({
                scrollTop: section_2 + 120
            },700);
        });
        $('nav>ul>li:nth-child(2)>.options_box>.option:nth-child(1)').click(function(){
            $('body,html').stop().animate({
                scrollTop: section_2 + 120
            },700);
        });
        $('nav>ul>li:nth-child(2)>.options_box>.option:nth-child(2)').click(function(){
            $('body,html').stop().animate({
                scrollTop: section_2_2 + 10
            },700);
        });

        //捲動到 "關於本站"
        var section_3 = $('main>section:nth-child(3)').offset().top;
        $('nav>ul>li:nth-child(3)').click(function(){
            $('body,html').stop().animate({
                scrollTop: section_3
            },700);
        });
//--------------------------------------------------------------------
        //開啟設定
        $('nav>ul>li:nth-child(4)').click(function(){
            $('.setting_cover').fadeIn(400);
            $('.setting').removeClass('setting_hide');
            $('html').addClass('scroll_lock');
        });
        //關閉設定
        $('.setting_cover').click(function(){
            $('.setting_cover').delay(200).fadeOut(300);
            $('.setting').addClass('setting_hide');
            $('html').delay(400).removeClass('scroll_lock');
        });
//--------------------------------------------------------------------
        //偵測到頂就隱藏 "回到頂端按鈕"
        $(window).scroll(function() {
            if($(this).scrollTop() > 400){
                $('#ScrollTop').stop().fadeIn(700);
            } else {
                $('#ScrollTop').stop().fadeOut(700);
            }
        });

        //偵測到底就隱藏 "往下瀏覽按鈕"
        $(window).scroll(function() {
            let bottom = section_3 - 100;
            if($(this).scrollTop() >= bottom){
                $('.down_button').fadeOut(500);
            } else {
                $('.down_button').fadeIn(500);
            }
        });

        //回到頂端
        $('#ScrollTop').click(function(){
            $('html,body').animate({ scrollTop: 0 }, 700);
            return false;
        });

        //按按鈕 瀏覽下個內容
        $('.down_button').click(function(){
            let scroll_top =  $(window).scrollTop();
            if(scroll_top < section_1){
                $('body,html').stop().animate({
                    scrollTop: section_1 + 10
                },700);
                return false;
            }else if(scroll_top < section_2 && scroll_top > section_1){
                $('body,html').stop().animate({
                    scrollTop: section_2 + 120
                },700);
                return false;
            }else if(scroll_top < section_2_2 && scroll_top > section_2){
                $('body,html').stop().animate({
                    scrollTop: section_2_2 + 10
                },700);
                return false;
            }else if(scroll_top < section_3 && scroll_top > section_2_2){
                $('body,html').stop().animate({
                    scrollTop: section_3 + 120
                },700);
            }
        });
//--------------------------------------------------------------------
        //捲動軸顯示 與否
        $('#show_scroll_bar').click(function(){
            $('#show_scroll_bar>.sw_botton').toggleClass('sw_button_close');
            $('#show_scroll_bar>.sw_botton>.button_ball').toggleClass('sw_button_ball_close');
            $('#show_scroll_bar>.setting_item_name').toggleClass('sw_button_close_text');
            $('body').toggleClass('scrollbar');
        });

        //向下瀏覽按鈕顯示 與否
        $('#scan_button').click(function(){
            $('#scan_button>.sw_botton').toggleClass('sw_button_close');
            $('#scan_button>.sw_botton>.button_ball').toggleClass('sw_button_ball_close');
            $('#scan_button>.setting_item_name').toggleClass('sw_button_close_text');
            $('.down_button').toggleClass('scan_button_close')
        });

        //允許文字選取 與否
        $('#text_select').click(function(){
            $('#text_select>.sw_botton').toggleClass('sw_button_close');
            $('#text_select>.sw_botton>.button_ball').toggleClass('sw_button_ball_close');
            $('#text_select>.setting_item_name').toggleClass('sw_button_close_text');
            $('body').toggleClass('text_no_select');
        });

        //允許右鍵儲存圖片 與否
        $('#save_img').click(function(){
            $('#save_img>.sw_botton').toggleClass('sw_button_close');
            $('#save_img>.sw_botton>.button_ball').toggleClass('sw_button_ball_close');
            $('#save_img>.setting_item_name').toggleClass('sw_button_close_text');
            $('.img_cover').toggleClass('img_cover_close');
        });
//--------------------------------------------------------------------
    });
});   