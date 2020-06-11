$(document).scroll(function(e) {
    $(window).scrollTop() > 70 ? $('.container-1').addClass('container-1-color') : $('.container-1').removeClass('container-1-color');
    $(window).scrollTop() > 70 ? $('.color-a').addClass('container-1-color-a') : $('.color-a').removeClass('container-1-color-a');
});


