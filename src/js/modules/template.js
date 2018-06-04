app.template = (function($){
  'use strict';

  console.log('This is a test to confirm javascript is working');

  function init(){
    console.log('This is a test to confirm jquery is working');
  }

  $(document).ready(function() {
    init();
  });

})(jQuery);