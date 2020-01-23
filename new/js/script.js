$(document).ready(function () {
    console.log("ready!");

    $(function () {
        $('.sitm2').hover(function () {
            $(this).addClass('active-service-item');
            $(this).find('img').attr('src', '../img/graphic-blue.png');
            $('.services__ext2').addClass('services__ext_on');
            $('.sitm1').removeClass('active-service-item');
            $('.sitm1').find('img').attr('src', '../img/web-white.png');
            $('.services__ext1').addClass('services__ext_off');
        }, function () {
            $(this).removeClass('active-service-item');
            $(this).find('img').attr('src', '../img/graphic-white.png');
            $('.services__ext2').removeClass('services__ext_on');
            $('.sitm1').addClass('active-service-item');
            $('.services__ext1').removeClass('services__ext_off');
        });
    });

    $(function () {
        $('.sitm3').hover(function () {
            $(this).addClass('active-service-item');
            $(this).find('img').attr('src', '../img/etc-blue.png');
            $('.services__ext3').addClass('services__ext_on');
            $('.sitm1').removeClass('active-service-item');
            $('.sitm1').find('img').attr('src', '../img/web-white.png');
            $('.services__ext1').addClass('services__ext_off');
        }, function () {
            $(this).removeClass('active-service-item');
            $(this).find('img').attr('src', '../img/etc-white.png');
            $('.services__ext3').removeClass('services__ext_on');
            $('.sitm1').addClass('active-service-item');
            $('.services__ext1').removeClass('services__ext_off');
        });
    });

    if ($('.sitm1').hover(function () {
            $('.sitm1').find('img').attr('src', '../img/web-blue.png');
        }));

    if ($('.services-row').mouseleave(function () {
            $('.sitm1').find('img').attr('src', '../img/web-blue.png');
        }));



    var typed1 = new Typed('#main__title-typed', {
        strings: ['по доступным ценам.', 'качественно!', 'в кратчайшие сроки', 'индивидуально', ''],
        typeSpeed: 80,
        backSpeed: 30,
        loop: true
    });

    var typed = new Typed('#typed__text', {
        strings: ['выделите свой бизнес среди конкурентов. ^1500', 'съэкономите ресурсы.', 'увеличите прибыль.'],
        typeSpeed: 80,
        backSpeed: 30,
        loop: true
    });

});
