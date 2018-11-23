app.hamburger = (function($){
  'use strict';

  function init(){
    $('.j-navigation-toggle').on('click',function() {
      $('body').toggleClass('is-nav-toggled');
    })
  }

  $(document).ready(function() {
    init();
  });

})(jQuery);