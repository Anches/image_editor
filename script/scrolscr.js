
$(document).scroll(function(e) {
    if($(document).width() >='600'){

    $(window).scrollTop() > 150 ? $('.txt1').addClass('animate__animated animate__fadeInLeftBig animate__delay-0.5s') : $('.txt1').removeClass('animate__animated animate__fadeInLeftBig animate__delay-0.5s');
    $(window).scrollTop() > 150 ? $('.img1').addClass('animate__animated animate__fadeInRightBig animate__delay-0.5s') : $('.img1').removeClass('animate__animated animate__fadeInRightBig animate__delay-0.5s');

    $(window).scrollTop() > 800 ? $('.txt2').addClass('animate__animated animate__fadeInRightBig animate__delay-0.5s') : $('.txt2').removeClass('animate__animated animate__fadeInRightBig animate__delay-0.5s');
    $(window).scrollTop() > 800 ? $('.img2').addClass('animate__animated animate__fadeInLeftBig animate__delay-0.5s') : $('.img2').removeClass('animate__animated animate__fadeInLeftBig animate__delay-0.5s');

    $(window).scrollTop() > 1500 ? $('.txt3').addClass('animate__animated animate__fadeInLeftBig animate__delay-0.5s') : $('.txt3').removeClass('animate__animated animate__fadeInLeftBig animate__delay-0.5s');
    $(window).scrollTop() > 1500 ? $('.img3').addClass('animate__animated animate__fadeInRightBig animate__delay-0.5s') : $('.img3').removeClass('animate__animated animate__fadeInRightBig animate__delay-0.5s');
 
    $(window).scrollTop() > 2300 ? $('.container-5').addClass('animate__animated animate__bounceInDown') : $('.container-5').removeClass('animate__animated animate__bounceInDown');
    $(window).scrollTop() > 2300 ? $('.block-01').addClass('animate__animated animate__bounceInLeft animate__delay-1s') : $('.block-01').removeClass('animate__animated animate__bounceInLeft animate__delay-1s');
    $(window).scrollTop() > 2500 ? $('.block-02').addClass('animate__animated animate__bounceInLeft animate__delay-2s') : $('.block-02').removeClass('animate__animated animate__bounceInLeft animate__delay-2s');
    $(window).scrollTop() > 2500 ? $('.block-03').addClass('animate__animated animate__bounceInLeft animate__delay-3s') : $('.block-03').removeClass('animate__animated animate__bounceInLeft animate__delay-3s');
    $(window).scrollTop() > 2500 ? $('.block-04').addClass('animate__animated animate__bounceInLeft animate__delay-4s') : $('.block-04').removeClass('animate__animated animate__bounceInLeft animate__delay-4s');
    $(window).scrollTop() > 2500 ? $('.block-05').addClass('animate__animated animate__bounceInLeft animate__delay-5s') : $('.block-05').removeClass('animate__animated animate__bounceInLeft animate__delay-5s');
    }
});