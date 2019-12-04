$(document).ready(function(){

$('#menu-wrap').prepend("<div id='menu-icon'><b>MENU</b></div>");
$("#menu-icon").on("click", function(){
  $(".menu").slideToggle();
});

});
