$(document).scroll(function(e) {
    
    $(window).scrollTop() > 1000 ? $('.commentsblock_23').addClass('animate__animated animate__fadeInLeftBig animate__delay-3s') : $('.commentsblock_23').removeClass('animate__animated animate__fadeInLeftBig animate__delay-3s');
    $(window).scrollTop() > 1000 ? $('.commentsblock_24').addClass('animate__animated animate__fadeInRightBig animate__delay-2s') : $('.commentsblock_24').removeClass('animate__animated animate__fadeInRightBig animate__delay-2s');
    $(window).scrollTop() > 1000 ? $('.commentsblock_25').addClass('animate__animated animate__fadeInLeftBig animate__delay-1s') : $('.commentsblock_25').removeClass('animate__animated animate__fadeInLeftBig animate__delay-1s');


});