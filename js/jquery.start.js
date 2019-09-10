$(document).ready(function () {

    $(window).scroll(function () {
        resolveStatusHeader();
    });

    resolveStatusHeader();

    $(document).on('click', '#btn-menu', function () {
        $("header").attr('class', '');
        $("header").attr('class', 'mode-stick');

        $(".menu-full").removeClass('close');
        $(".menu-full").addClass('open');

        $(this).replaceWith('<span id="btn-close"></span>');
    });

    $(document).on('click', '#btn-close', function () {
        resolveStatusHeader();
        closeMenu();
    });

    $(document).on('click', 'nav a', function () {
        closeMenu();
    });
});

function resolveStatusHeader() {
    var positionLogo = $('#hero h2').position();
    var positionLogoBottom = positionLogo.top + 100;

    if ($(window).scrollTop() < positionLogoBottom) {
        $("header").removeClass();
    } else {
        $("header").attr('class', 'mode-stick');
    }
}

function closeMenu() {
    $(".menu-full").removeClass('open');
    $(".menu-full").addClass('close');

    $("header").find("#btn-close").replaceWith('<span id="btn-menu"></span>');
}