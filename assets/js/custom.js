$(document).ready(function () {
    console.log('document ready custom.js')
});
window.onload = function () {
    console.log('Onload disparado page custom.js');
    $("body").css("overflow", "visible");
}