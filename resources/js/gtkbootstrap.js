/**
 * Garuda Admin Kit
 * Template bootstrap 4.6.1 untuk berbagai kebutuhan aplikasi admin.
 *
 * @package gtkbootstrap
 * @since 1.0.0
 * @author Programmer Ndeso and Dasa Kreativa Studio
 */
$('.input-group-plain .form-control').on('focus', function() {
    $(this).closest('.input-group-plain').addClass('focused');
});
$('.input-group-plain .form-control').on('blur', function() {
    $(this).closest('.input-group-plain').removeClass('focused');
});

/** Menu */
$("#mainmenu").metisMenu();

/** Sidebar */
$(".sidebar-toggler").click(function() {
    $('#app').toggleClass('toggled');
});

/** Clock */
setInterval(showTime, 1000);
function showTime() {
    let time = new Date();
    let hour = time.getHours();
    let min = time.getMinutes();
    let sec = time.getSeconds();

    hour = hour < 10 ? "0" + hour : hour;
    min = min < 10 ? "0" + min : min;
    sec = sec < 10 ? "0" + sec : sec;

    let currentTime = hour + ":"
        + min + ":" + sec;

    $('#jam').text(currentTime);
}
showTime();
