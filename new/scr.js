$(document).ready(function () {
    $(".a1").click(function () {

        if ($(".b1")) {
            $('.b1').append('<p>B1 is there</p>')
        };
        else if ($(".b2")) {
            $('.b2').append('<p>B2 is there</p>');
            alert("b2");
        } else if ($(".b3")) {
            $('.b3').append('<p>B3 is there</p>');
            alert("b3.");
        } else if ($(".b4")) {
            $('.b4').append('<p>B4 is there</p>');
            alert("b4.");
        }
    });
});
