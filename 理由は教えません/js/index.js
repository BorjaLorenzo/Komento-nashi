$(document).ready(function () {
    let enlace;
    $('.caja').click(function (e) { 
        e.preventDefault();
        enlace=$(this).children().eq(0).children().eq(1).attr('href');
        $(window).attr('location').href=enlace;
    });
    $('.href').click(function (e) { 
        e.preventDefault();
        enlace=$(this).next().attr('href');
        $(window).attr('location').href=enlace;
    });
});