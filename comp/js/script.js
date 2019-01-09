$(document).ready(function () {

    $(".serv-items").hover(
        function () {
            $(".serv-items img").animate({
                top: "0px"
            }, 700)
        },
        function () {
            $(".serv-items img").stop().animate({
                top: "-600px"
            }, 700)
        }
    );

});
