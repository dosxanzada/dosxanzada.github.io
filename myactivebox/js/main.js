$(function () {

    /*Fixed Header*/
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

    /*Smooth Scroll*/
    $('[data-scroll]').on('click', function (event) {
        event.preventDefault();

        let elementId = $(this).data('scroll');
        let elementOffset = $(elementId).offset().top;

        $('#header__nav').removeClass('show');

        $('html, body').animate({
            scrollTop: elementOffset - 70

        }, 500);

    });

    /*Nav Toggle*/
    $('#header__btn').click(function (event) {
        event.preventDefault();
        $('#header__nav').toggleClass('show');
    });

    /*Reviews Slider*/
    let slider = $('#reviewSlider');

    slider.slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: false,
        arrows: false,
        dots: true
    });




});
