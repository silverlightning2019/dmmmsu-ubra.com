(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.datepicker').datepicker();
    $('.dropdown-trigger').dropdown();
    $('.modal').modal();
    $('.tabs').tabs();
    $('.materialboxed').materialbox();
    $('.slider').slider({
    fullwidth: false,
    indicators: false,
    height: 500
  });
   $('select').formSelect();

  }); // end of document ready
})(jQuery); // end of jQuery name space
