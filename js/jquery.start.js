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

    $(document).on('click', 'nav a', function (e) {
        e.preventDefault();
        var href = $(this).attr('href');
        var listHref = href.split('#');
        console.log(listHref);
        closeMenu();
        if (listHref.length > 1) {
            $('html, body').animate({
                scrollTop: $('#' + listHref[1]).offset().top - 91
            }, 2000);
        }
    });

    $('#edificios .slick').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
    });

    var sliderUnidades = $('#unidades .slick').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
    });

    sliderUnidades.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        $(".data-unity").removeClass('active');
        $(".data-unity[data-index='" + nextSlide + "']").addClass('active');
    });

    if ($('#form-contacto')[0]) {
        $('#form-contacto').validate({
            rules: {
                name: {
                    required: true
                },
                phone: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                msg: {
                    required: true
                }
            },
            errorClass: "error",
            errorPlacement: function (error, element) {
                /*$(element).prev().children().text(error[0].innerText);*/
            },
            success: function (label, element) {
                /*$(element).prev().children().text('');*/
            },
            submitHandler: function (form) {
                $('button.send').text('Sending...');
                $('button.send').attr('disabled', true);
                var height = $('.form').height();
                $('#form-contacto').hide();
                var loading = isLoading();
                $('.response').css('height', height);
                $('.response').html(loading);
                setTimeout(function () {
                    $('.response').html('<p>Muchas gracias! a la brevedad nos pondremos en contacto con usted!</p>');
                    $('.response').show();
                }, 3000);
                return false;
            }
        });
    }

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

function isLoading() {
    var html = '<div class="preload"><div class="bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div></div>';
    return html;
}