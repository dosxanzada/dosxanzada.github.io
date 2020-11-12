$(function () {

    let header = $('#header');
    let main = $('#main');
    let mainHeight = main.innerHeight();
    let scrollPos = $(window).scrollTop();

    $(window).on('scroll load', function () {
        scrollPos = $(this).scrollTop();

        if (scrollPos > 10) {
            header.addClass('fixed');
        } else {
            header.removeClass('fixed');
        }
    });

    $('#header__btn').click(function (event) {
        event.preventDefault();
        $('#header__nav').toggleClass('show');
    });

    $('[data-scroll]').on('click', function (event) {
        event.preventDefault();

        let elementId = $(this).data('scroll');
        let elementOffset = $(elementId).offset().top;

        $('#header__nav').removeClass('show');

        $('html, body').animate({
            scrollTop: elementOffset - 80
        }, 500);
    });


    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true
    });

    $('.call__btn').click(function () {
        $('#user_name').focus();
    });

});
