jQuery(document).ready(function () {

    $(window).scroll(function () {
        var topPos = $(this).scrollTop();
        if (topPos >= 50) {
            $('header').addClass('scroll');
            $('.header__inner').addClass('minify');
            $('.header__menu li a').addClass('scroll-a');
            $('.main__logo').css('display', 'none');
            $('.second__logo').css('display', 'block');
        } else {
            $('header').removeClass('scroll');
            $('.header__inner').removeClass('minify');
            $('.header__menu li a').removeClass('scroll-a');
            $('.main__logo').css('display', 'block');
            $('.second__logo').css('display', 'none');
        }
    });





    $(".header__menu li a").click(function () {
        elementClick = $(this).attr("href");
        destination = $(elementClick).offset().top;
        $("body,html").animate({
            scrollTop: destination
        }, 500);
    });

    var typed = new Typed('#typed__text', {
        strings: ['по доступным ценам.', 'качественно!', 'в кратчайшие сроки', 'индивидуально', ''],
        typeSpeed: 80,
        backSpeed: 50,
        loop: true
    });

    $('.services__item').hover(function () {
        $(this).find('span').fadeToggle('fast');
        $(this).find('.services__body').toggleClass('active');
    });

    $('.services__info').fadeOut();

    $('.services__item').hover(function () {
        $(this).find('.services__info').fadeToggle();
    });



});
