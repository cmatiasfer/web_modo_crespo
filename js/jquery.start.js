$(window).on('load', function () { // makes sure the whole site is loaded
    $('#status').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(350).css({
        'overflow-y': 'visible'
    });
});

$(window).on('resize', function () {

    rowGutters();
    removeClassContainer();
    posicionMiniPlantas();
    resetHeightSlick();

});

$(document).ready(function () {

    rowGutters();

    resolveStatusHeader();

    currentSection();

    removeClassContainer();

    posicionMiniPlantas();

    $(window).scroll(function () {
        resolveStatusHeader();
        currentSection();
    });


    $(document).on('click', '#btn-menu', function () {
        $("header").attr('class', '');
        $("header").attr('class', 'mode-stick');
        $("body").css("overflow", "hidden");

        $(".menu-full").removeClass('close');
        $(".menu-full").addClass('open');

        $(this).replaceWith('<span id="btn-close"></span>');
    });

    $(document).on('click', '#btn-close', function () {
        resolveStatusHeader();
        closeMenu();
        $("body").css("overflow", "auto");
    });

    $(document).on('click', 'nav a', function (e) {
        e.preventDefault();
        $("body").css("overflow", "auto");
        var href = $(this).attr('href');
        var listHref = href.split('#');

        closeMenu();

        if (listHref.length > 1) {
            $('html, body').animate({
                scrollTop: $('#' + listHref[1]).offset().top - 91
            }, 2000);
        }
    });

    var sliderUbicacion = $('#ubicacion .slick').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
    });

    var sliderEdificios = $('#edificios .slick').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
    });

    $('#unidades .slick').on('init', function () {
        setTimeout(function () {
            resetHeightSlick();
        }, 500);
    });


    var sliderUnidades = $('#unidades .slick').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true
    });

    sliderUbicacion.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        $("#ubicacion .list-sliders span").removeClass('active');
        $("#ubicacion .list-sliders span[data-index='" + nextSlide + "']").addClass('active');
    });

    sliderEdificios.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        $("#edificios .list-sliders span").removeClass('active');
        $("#edificios .list-sliders span[data-index='" + nextSlide + "']").addClass('active');
    });



    sliderUnidades.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        var posicion = posicionMiniPlantas();
        $(".data-unity").removeClass('active');
        $(".data-unity[data-index='" + nextSlide + "']").addClass('active');
        if (posicion == "bottom") {
            $(".mobile-miniplantas").hide();
            $(".mobile-miniplantas[data-index='" + nextSlide + "']").show();
        }
    });

    $(".list-sliders span").click(function () {
        var slider = $(this).attr('data-slider');
        var indexSlider = $(this).attr('data-index');
        $(this).parent().find('span').removeClass();
        $(this).addClass('active');
        if (slider == 'ubicacion') {
            sliderUbicacion.slick('slickGoTo', indexSlider);
        } else {
            sliderEdificios.slick('slickGoTo', indexSlider);
        }
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
                var height = $('#form-contacto').height();
                $('#form-contacto').hide();
                var loading = isLoading();
                $('.response').css('height', height);
                $('.response').html(loading);

                var contactName = $('#form-contacto #Name').val();
                var contactEmail = $('#form-contacto #Email').val();
                var contactTelefono = $('#form-contacto #Phone').val();
                var contactMessage = $('#form-contacto #Msg').val();

                var data = 'Name=' + contactName + '&Phone=' + contactTelefono + '&Email=' + contactEmail + '&Msg=' + contactMessage;
                setTimeout(function () {
                    $.ajax({
                        type: "POST",
                        url: "ajax_email.php",
                        data: data,
                        dataType: 'json',
                        success: function (ret) {
                            // Message was sent
                            if (ret.status == 'OK') {
                                $('.response').html('<p>¡Muchas gracias! <br> A la brevedad nos pondremos en contacto con usted</p>');
                                $('.response').show();
                            }

                            // There was an error
                            else {
                                console.log('error');
                                // $('#gracias').html(ret.msg).animate({ 'opacity': 1 }, 500);
                            }
                        }
                    });

                }, 800);
                return false;
            }
        });
    }

});

function resetHeightSlick() {
    $("#unidades .slick").css("height", 'auto');
    var height = $("#unidades .slick").height();
    console.log(height);
    $("#unidades .slick").css("height", height);
}

function isLoading() {
    var html = '<div class="preload"><div class="bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div></div>';
    return html;
}

function isMobile() {
    var browser_mobile = (/android|webos|iphone|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()));
    var browser_touch = (/android|webos|iphone|ipod|ipad|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()));

    if (!browser_mobile) {
        if ($(window).width() < 767) {
            browser_mobile = true
        }
    }
    return browser_mobile;
}

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

function rowGutters() {
    if (isMobile()) {
        $(".row.content-img-text").addClass('no-gutters');
        $(".row.ubi-grid").addClass('no-gutters');
        $(".row.grid-edificios").addClass('no-gutters');
        $("#unidades .row").addClass('no-gutters');
    } else {
        $(".row.content-img-text").removeClass('no-gutters');
        $(".row.ubi-grid").removeClass('no-gutters');
        $(".row.grid-edificios").removeClass('no-gutters');
        $("#unidades .row").removeClass('no-gutters');
    }
}

function posicionMiniPlantas(firstExecution = true) {
    var posicion = "";
    if (isMobile()) {
        $(".desk-miniplantas").hide();
        $(".lista-miniplantas").show();
        if (firstExecution == true) {
            $(".lista-miniplantas").find(".mobile-miniplantas").hide();
            $(".lista-miniplantas").find(".mobile-miniplantas[data-index='0']").show();
        }
        posicion = "bottom";
    } else {
        $(".desk-miniplantas").show();
        $(".lista-miniplantas").hide();
        posicion = "left";
    }
    return posicion
}

function removeClassContainer() {
    if ($(window).width() < 500 && $(window).height() > 400) {
        $(".container").addClass("container-mobile");
        setTimeout(function () {
            $(".container-mobile").removeClass("container");
        }, 100);

    } else {
        if ($(".container-mobile")[0]) {
            $(".container-mobile").addClass("container");
            setTimeout(function () {
                $(".container").removeClass("container-mobile");
            }, 100);

        }

    }
}

function currentSection() {
    var ubicacion = $('#ubicacion').position().top - 100;
    var edificios = $('#edificios').position().top - 100;
    var unidades = $('#unidades').position().top - 100;
    var amenities = $('#amenities').position().top - 100;
    var contacto = Math.floor($('#contacto').position().top) - ($(window).height() - 600);


    var windowTop = $(window).scrollTop();

    $(".menu-full a").removeClass("active");
    if (windowTop > ubicacion && windowTop < edificios) {
        $(".menu-full a[href='#ubicacion']").addClass("active");
    }
    if (windowTop >= edificios && windowTop < unidades) {
        $(".menu-full a[href='#edificios']").addClass("active");
    }
    if (windowTop >= unidades && windowTop < amenities) {
        $(".menu-full a[href='#unidades']").addClass("active");
    }
    if (windowTop >= amenities && windowTop < contacto) {
        $(".menu-full a[href='#amenities']").addClass("active");
    }
    if (windowTop >= contacto) {
        $(".menu-full a[href='#contacto']").addClass("active");
    }
}