$(document).ready(function () {
    $('#video-start').click(function (e) {
        e.preventDefault();
        document.getElementById('video-home').play();
        $(this).hide();
    });
    $('#video-home').click(function (e) {
        e.preventDefault();
        document.getElementById('video-home').pause();
        $('#video-start').show();
    });

    $(window).scroll(function () {

    });

    $('.disclaimer').click(function () {
        $('.disc-content').toggleClass('hidden');
        $('.disclaimer>span').toggleClass('hidden');
        if ($('.disc-content').hasClass('hidden')) {
            $('.disclaimer-titulo>.arrow-button img').css('transform', 'rotate(90deg)');
        } else {
            $('.disclaimer-titulo>.arrow-button img').css('transform', 'rotate(270deg)');
        }

    });
    $(".sidebar").on("click", function (e) {
        e.preventDefault();
        //$("#menu").css("opacity", "0");
        $("#lgMenu").addClass("enter");
        $("#lgMenulm2").addClass("enter");
        $("#luto").addClass("luto");
    });
    $(".side-x").on("click", function (e) {
        e.preventDefault();
        $("#lgMenu").removeClass("enter");
        $("#lgMenulm2").removeClass("enter");
        $("#luto").removeClass("luto");
        //$("#menu").css("opacity", "1");
    });
    $('#luto').click(function (e) { 
        e.preventDefault();
        if (document.getElementById('lgMenu').contains(e.target)){
          // Clicked in box
          console.log('click en menu');
        } else{
            $("#lgMenu").removeClass("enter");
            $("#lgMenulm2").removeClass("enter");
            $("#luto").removeClass("luto");
        }
    });
    $('.nav-img').click(function (e) { 
        e.preventDefault();
        $(window).attr('location').href='https://takeaway-dev.es/dunas/';
    });

});

let swiper = new Swiper('.swiper.swiper-blanco', {
    // Optional parameters
    loop: true,
    // slidesPerView: 1,
    spaceBetween: 20,
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    }
});
// let swiperblanco2 = new Swiper('.swiper.swiper-blanco', {
//     // Optional parameters
//     loop: true,
//     slidesPerView: 1,
//     spaceBetween: 0,
//     // If we need pagination
//     pagination: {
//         el: '.swiper-pagination',
//         clickable: true
//     }
// });
let swiperNegro = new Swiper('.swiper.swiper-negro', {
    // Optional parameters
    loop: true,
    spaceBetween: 50,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    }
});

var interruptor = false;
var prevScrollpos = window.pageYOffset;

window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementsByClassName("nav")[0].style.top = "0";
        if (interruptor) {
            document.getElementsByClassName("nav")[0].style.backgroundColor = "white";
        }
    } else {
        document.getElementsByClassName("nav")[0].style.top = "-151px";
        interruptor = true;
    }
    prevScrollpos = currentScrollPos;
}


