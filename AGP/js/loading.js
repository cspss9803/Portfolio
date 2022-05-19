$(document).ready(function () {
    var n = 0
    var interval = setInterval(function(){
            if(n<100){
                n++;
                $('#number').text(n+"%");
                if(n>=100){
                    clearInterval(interval)
                }
            }
        },50)
    setTimeout(function(){
        $('#cr,#number').fadeOut(400);
        $('#loading h1').delay(300).fadeIn(400);
        $('#loading').delay(1900).fadeOut(400);
    },5000)
});