/*jslint browser: true*/
$(document).ready(function () {
    let scrollTop = 0;
    $(window).scroll(function () {
        scrollTop = $(window).scrollTop();
        if (scrollTop >= 20) {

            $('#first-nav').addClass('hide-nav');
            $('#second-nav').removeClass('hide-nav');

            //            $('nav').addClass('scrolled-nav');
            //            $('.nav-item').addClass('');
            //            $('.white-nav').css('display': 'none');
            //            $('.black-nav').css('display': 'flex!important;');

        } else if (scrollTop < 20) {

            $('#first-nav').removeClass('hide-nav');
            $('#second-nav').addClass('hide-nav');

            //            $('nav').removeClass('scrolled-nav');
            //            $('.black-nav').hide();
        }
    });


});
