// 偵測是否為觸碰裝置，進而調整網頁
function isMobile() {
    try{ document.createEvent("TouchEvent"); return true; }
    catch(e){ return false;}
}
if(isMobile()){
    $('.interaction').addClass('cursor_point');
    $('.cursor').addClass('hide');
    $('*').addClass('cursor_auto');
}else{
    $('.interaction').removeClass('cursor_point');
    $('.cursor').removeClass('hide');
    $('*').removeClass('cursor_auto');
}