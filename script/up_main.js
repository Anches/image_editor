jQuery(document).ready(function() {
    var btn = $('.btnup');  
    $(window).scroll(function() {     
      if ($(window).scrollTop() > 300 && $(window).scrollTop() < 1900) {
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