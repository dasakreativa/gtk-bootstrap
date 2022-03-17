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

// Sidebar
$(".sidebar-toggler").click(function() {
    $('#app').toggleClass('toggled');
});
