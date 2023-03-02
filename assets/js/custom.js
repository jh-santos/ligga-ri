$(document).ready(function () {
    console.log('document ready custom.js')
});
window.onload = function () {
    console.log('Onload disparado page custom.js');
    setTimeout(() => {
        $('.preload_01').addClass('ativo');
        setTimeout(() => {
            $('.preload_01').css('opacity', '0');
            setTimeout(() => {
                $('.preload_01').remove();
                $("body").css("overflow", "visible");
            }, 50);
        }, 1000);
    }, 500);

}