window.onload = function(){

    const cursor1 = document.getElementById('cursor1');
    const cursor2 = document.getElementById('cursor2');
    const cursor3 = document.getElementById('cursor3');

    document.addEventListener('mousemove', (e) => {
        cursor1.style.cssText = `
        left: ${e.clientX}px;
        top:  ${e.clientY}px;
        `;
        cursor2.style.cssText = `
        left: ${e.clientX}px;
        top:  ${e.clientY}px;
        `;
        cursor3.style.cssText = `
        left: ${e.clientX}px;
        top:  ${e.clientY}px;
        `;
    });

    $('.interaction').hover(function(){
        $('.cursor').toggleClass('cursor_hover');
    });
}