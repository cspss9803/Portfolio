$(document).ready(function(){
    $(function(){ //購物車
        $('.shopping_car_button,.shopping_counts').click(function(){
            $('body,html').addClass('body_lock');
            $('.shopping_car_cover').fadeIn(300);
            $('.shopping_car').removeClass('shopping_car_hide');
        });
        $('.shopping_car_cover').click(function(){
            $('.shopping_car').addClass('shopping_car_hide');
            $('.shopping_car_cover').fadeOut(600);
            $('body,html').removeClass('body_lock');
        });
    });
    $('.banner_button').click(function(){
        const product_scrollTop = $('.products_box').offset().top;
        $('body,html').stop().animate({
            scrollTop: product_scrollTop
        },700);
    });
    $('.logo').click(function(){
        $('body,html').stop().animate({
            scrollTop: 0
        },700);
    });
});

var pruduct1 = 0;
var pruduct2 = 0;
var pruduct3 = 0;
var pruduct4 = 0;
var pruduct5 = 0;
var pruduct6 = 0;
var pruduct7 = 0;
var pruduct8 = 0;
var pruduct9 = 0;
var pruduct_counts = 0;

var pruduct1_price = 45;
var pruduct2_price = 99;
var pruduct3_price = 39;
var pruduct4_price = 49;
var pruduct5_price = 40;
var pruduct6_price = 60;
var pruduct7_price = 35;
var pruduct8_price = 45;
var pruduct9_price = 45;
var pruduct_price_total = 0;

function productCount(number,value){
    if(number==0){
        pruduct1 = 0;
        pruduct2 = 0;
        pruduct3 = 0;
        pruduct4 = 0;
        pruduct5 = 0;
        pruduct6 = 0;
        pruduct7 = 0;
        pruduct8 = 0;
        pruduct9 = 0;
        pruduct_counts = 0;
        $('.product:nth-child(1)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct1);
        $('.product:nth-child(1)>.product_text_box>.buy_box>.price').text(pruduct1_price+" $");
        $('.product:nth-child(2)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct2);
        $('.product:nth-child(2)>.product_text_box>.buy_box>.price').text(pruduct2_price+" $");
        $('.product:nth-child(3)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct3);
        $('.product:nth-child(3)>.product_text_box>.buy_box>.price').text(pruduct3_price+" $");
        $('.product:nth-child(4)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct4);
        $('.product:nth-child(4)>.product_text_box>.buy_box>.price').text(pruduct4_price+" $");
        $('.product:nth-child(5)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct5);
        $('.product:nth-child(5)>.product_text_box>.buy_box>.price').text(pruduct5_price+" $");
        $('.product:nth-child(6)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct6);
        $('.product:nth-child(6)>.product_text_box>.buy_box>.price').text(pruduct6_price+" $");
        $('.product:nth-child(7)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct7);
        $('.product:nth-child(7)>.product_text_box>.buy_box>.price').text(pruduct7_price+" $");
        $('.product:nth-child(8)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct8);
        $('.product:nth-child(8)>.product_text_box>.buy_box>.price').text(pruduct8_price+" $");
        $('.product:nth-child(9)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct9);
        $('.product:nth-child(9)>.product_text_box>.buy_box>.price').text(pruduct9_price+" $");
    }else if(number==1){
        pruduct1 += value;
        if(pruduct1<=0){pruduct1 = 0};
        pruduct1_price = pruduct1_price*pruduct1;
        $('.product:nth-child(1)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct1);
        $('.product:nth-child(1)>.product_text_box>.buy_box>.price').text(pruduct1_price+" $");
        $('.shopping_car_form_product:nth-child(2)>.shopping_car_form_product_count>input').val(pruduct1);
        $('.shopping_car_form_product:nth-child(2)>.shopping_car_form_product_price>input').val(pruduct1_price);
        pruduct1_price = 45;
    }else if(number==2){
        pruduct2 += value;
        if(pruduct2<=0){pruduct2 = 0};
        pruduct2_price = pruduct2_price*pruduct2;
        $('.product:nth-child(2)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct2);
        $('.product:nth-child(2)>.product_text_box>.buy_box>.price').text(pruduct2_price+" $");
        $('.shopping_car_form_product:nth-child(3)>.shopping_car_form_product_count>input').val(pruduct2);
        $('.shopping_car_form_product:nth-child(3)>.shopping_car_form_product_price>input').val(pruduct2_price);
        pruduct2_price = 99;
    }else if(number==3){
        pruduct3 += value;
        if(pruduct3<=0){pruduct3 = 0};
        pruduct3_price = pruduct3_price*pruduct3;
        $('.product:nth-child(3)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct3);
        $('.product:nth-child(3)>.product_text_box>.buy_box>.price').text(pruduct3_price+" $");
        $('.shopping_car_form_product:nth-child(4)>.shopping_car_form_product_count>input').val(pruduct3);
        $('.shopping_car_form_product:nth-child(4)>.shopping_car_form_product_price>input').val(pruduct3_price);
        pruduct3_price = 39;
    }else if(number==4){
        pruduct4 += value;
        if(pruduct4<=0){pruduct4 = 0};
        pruduct4_price = pruduct4_price*pruduct4;
        $('.product:nth-child(4)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct4);
        $('.product:nth-child(4)>.product_text_box>.buy_box>.price').text(pruduct4_price+" $");
        $('.shopping_car_form_product:nth-child(5)>.shopping_car_form_product_count>input').val(pruduct4);
        $('.shopping_car_form_product:nth-child(5)>.shopping_car_form_product_price>input').val(pruduct4_price);
        pruduct4_price = 49;
    }else if(number==5){
        pruduct5 += value;
        if(pruduct5<=0){pruduct5 = 0};
        pruduct5_price = pruduct5_price*pruduct5;
        $('.product:nth-child(5)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct5);
        $('.product:nth-child(5)>.product_text_box>.buy_box>.price').text(pruduct5_price+" $");
        $('.shopping_car_form_product:nth-child(6)>.shopping_car_form_product_count>input').val(pruduct5);
        $('.shopping_car_form_product:nth-child(6)>.shopping_car_form_product_price>input').val(pruduct5_price);
        pruduct5_price = 40;
    }else if(number==6){
        pruduct6 += value;
        if(pruduct6<=0){pruduct6 = 0};
        pruduct6_price = pruduct6_price*pruduct6;
        $('.product:nth-child(6)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct6);
        $('.product:nth-child(6)>.product_text_box>.buy_box>.price').text(pruduct6_price+" $");
        $('.shopping_car_form_product:nth-child(7)>.shopping_car_form_product_count>input').val(pruduct6);
        $('.shopping_car_form_product:nth-child(7)>.shopping_car_form_product_price>input').val(pruduct6_price);
        pruduct6_price = 60;
    }else if(number==7){
        pruduct7 += value;
        if(pruduct7<=0){pruduct7 = 0};
        pruduct7_price = pruduct7_price*pruduct7;
        $('.product:nth-child(7)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct7);
        $('.product:nth-child(7)>.product_text_box>.buy_box>.price').text(pruduct7_price+" $");
        $('.shopping_car_form_product:nth-child(8)>.shopping_car_form_product_count>input').val(pruduct7);
        $('.shopping_car_form_product:nth-child(8)>.shopping_car_form_product_price>input').val(pruduct7_price);
        pruduct7_price = 35;
    }else if(number==8){
        pruduct8 += value;
        if(pruduct8<=0){pruduct8 = 0};
        pruduct8_price = pruduct8_price*pruduct8;
        $('.product:nth-child(8)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct8);
        $('.product:nth-child(8)>.product_text_box>.buy_box>.price').text(pruduct8_price+" $");
        $('.shopping_car_form_product:nth-child(9)>.shopping_car_form_product_count>input').val(pruduct8);
        $('.shopping_car_form_product:nth-child(9)>.shopping_car_form_product_price>input').val(pruduct8_price);
        pruduct8_price = 45;
    }else if(number==9){
        pruduct9 += value;
        if(pruduct9<=0){pruduct9 = 0};
        pruduct9_price = pruduct9_price*pruduct9;
        $('.product:nth-child(9)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct9);
        $('.product:nth-child(9)>.product_text_box>.buy_box>.price').text(pruduct9_price+" $");
        $('.shopping_car_form_product:nth-child(10)>.shopping_car_form_product_count>input').val(pruduct9);
        $('.shopping_car_form_product:nth-child(10)>.shopping_car_form_product_price>input').val(pruduct9_price);
        pruduct9_price = 45;
    }
    pruduct_counts = pruduct1+pruduct2+pruduct3+pruduct4+pruduct5+pruduct6+pruduct7+pruduct8+pruduct9;
    pruduct_price_total = pruduct1*pruduct1_price + pruduct2*pruduct2_price + pruduct3*pruduct3_price + pruduct4*pruduct4_price +pruduct5*pruduct5_price + pruduct6*pruduct6_price + pruduct7*pruduct7_price +pruduct8*pruduct8_price + pruduct9*pruduct9_price;
    $('.shopping_counts').text(pruduct_counts);
    $('.shopping_car_form_product_tag:nth-child(11)>.shopping_car_form_product_count>input').val(pruduct_counts);
    $('.shopping_car_form_product_tag:nth-child(11)>.shopping_car_form_product_price>input').val(pruduct_price_total);

    if(pruduct_counts>0){
        $('.shopping_counts').fadeIn(400);
    }else{
        $('.shopping_counts').fadeOut(400);
    }
    if(pruduct_counts>0){
        $('.shopping_car_form_sumit_cover').hide();
    }else{
        $('.shopping_car_form_sumit_cover').show();
    }
}


var count_value;
function count_change(event,number){
    count_value = event.target.value;
    if(count_value<0){event.target.value = 0};
    if(number==1){
        pruduct1 = count_value;
        pruduct1_price = pruduct1_price*pruduct1;
        $('.product:nth-child(1)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct1);
        $('.product:nth-child(1)>.product_text_box>.buy_box>.price').text(pruduct1_price+" $");
        pruduct1_price = 45;

    }else if(number==2){
        pruduct2 = count_value;
        pruduct2_price = pruduct2_price*pruduct2;
        $('.product:nth-child(2)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct2);
        $('.product:nth-child(2)>.product_text_box>.buy_box>.price').text(pruduct2_price+" $");
        pruduct1_price = 45;

    }else if(number==3){
        pruduct3 = count_value;
        pruduct3_price = pruduct3_price*pruduct3;
        $('.product:nth-child(3)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct3);
        $('.product:nth-child(3)>.product_text_box>.buy_box>.price').text(pruduct3_price+" $");
        pruduct1_price = 45;
        
    }else if(number==4){
        pruduct4 = count_value;
        pruduct4_price = pruduct4_price*pruduct4;
        $('.product:nth-child(4)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct4);
        $('.product:nth-child(4)>.product_text_box>.buy_box>.price').text(pruduct4_price+" $");
        pruduct1_price = 45;
        
    }else if(number==5){
        pruduct5 = count_value;
        pruduct5_price = pruduct5_price*pruduct5;
        $('.product:nth-child(5)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct5);
        $('.product:nth-child(5)>.product_text_box>.buy_box>.price').text(pruduct5_price+" $");
        pruduct1_price = 45;
        
    }else if(number==6){
        pruduct6 = count_value;
        pruduct6_price = pruduct6_price*pruduct6;
        $('.product:nth-child(6)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct6);
        $('.product:nth-child(6)>.product_text_box>.buy_box>.price').text(pruduct6_price+" $");
        pruduct1_price = 45;
        
    }else if(number==7){
        pruduct7 = count_value;
        pruduct7_price = pruduct7_price*pruduct7;
        $('.product:nth-child(7)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct7);
        $('.product:nth-child(7)>.product_text_box>.buy_box>.price').text(pruduct7_price+" $");
        pruduct1_price = 45;
        
    }else if(number==8){
        pruduct8 = count_value;
        pruduct8_price = pruduct8_price*pruduct8;
        $('.product:nth-child(8)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct8);
        $('.product:nth-child(8)>.product_text_box>.buy_box>.price').text(pruduct8_price+" $");
        pruduct1_price = 45;
        
    }else if(number==9){
        pruduct9 = count_value;
        pruduct9_price = pruduct9_price*pruduct9;
        $('.product:nth-child(9)>.product_text_box>.buy_box>.buy_count>.buy_count_number').text(pruduct9);
        $('.product:nth-child(9)>.product_text_box>.buy_box>.price').text(pruduct9_price+" $");
        pruduct1_price = 45;
        
    }
}