app.loading = (function($){
  'use strict';

  $(window).on('load', function() {
    if ( localStorage.getItem('loading-flag') ) {
      $('.overlay.overlay--loading').addClass('is-invisible');      
      setTimeout(function() {
        $('.overlay.overlay--loading').addClass('is-hidden');
      },1000);
    } else {
      localStorage.setItem('loading-flag', 'true');
      
      setTimeout(function() {
        $('.overlay.overlay--loading').addClass('is-invisible');      
      },1800)
      setTimeout(function() {
        $('.overlay.overlay--loading').addClass('is-hidden');
      },3000);    
    }
  });

})(jQuery);