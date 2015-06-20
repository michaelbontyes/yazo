// Material Custom Scripts


(function($){
  $(function(){

    $('.button-collapse').sideNav({
          menuWidth: 240, // Default is 240
          edge: 'left', // Choose the horizontal origin
          closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
        }
      );
    $('.parallax').parallax();

    var $container = $('#masonry-grid');
    // initialize
    $container.masonry({
      columnWidth: '.col',
      itemSelector: '.col',
    });
    

  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
  
  $('.slider').slider({
      full_width: true,
      indicators: false,
      transition: 1000
  });


  }); // end of document ready
})(jQuery); // end of jQuery name space