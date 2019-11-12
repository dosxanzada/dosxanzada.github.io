jQuery(document).ready(function () {

    $(".header__menu li a").click(function () {
        elementClick = $(this).attr("href");
        destination = $(elementClick).offset().top;
        $("body,html").animate({
            scrollTop: destination
        }, 500);
    });

//    $(window).scroll(function () {
            //        $('header').toggleClass('scroll');
            //        $('.header__inner').toggleClass('scroll');
            //    });

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
