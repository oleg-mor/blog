// Активное меню
$(document).ready(function () {
    $('.nav-dashboard li a').click(function () {
        $('.nav-dashboard li a').removeClass('active');
        $(this).addClass('active');
        return true;
    });
});