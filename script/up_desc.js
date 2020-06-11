jQuery(document).ready(function() {
    var btn = $('.btnup');  
    $(window).scroll(function() {     
      if ($(window).scrollTop() > 300 && $(window).scrollTop() < 3100) {
         btn.addClass('show');
       } 
       else {
         btn.removeClass('show');
       }
     });
     btn.on('click', function(e) {
       e.preventDefault();
       $('html, body').animate({scrollTop:0}, '300');
     });
  });