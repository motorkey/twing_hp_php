$(function() {

  //
  var breakpoint = 640;



  // hamburger
  $(".hamburger").on("click", ()=> {
      $(".topHeader__hamburger__menu").slideToggle(300);
      $(this).toggleClass("active");
      $(".hamburger__line--top").toggleClass('line--top--toCloseBtn');
      $(".hamburger__line--mid").toggleClass('line--mid--toCloseBtn');
      $(".hamburger__line--bot").toggleClass('line--bot--toCloseBtn');
  });
});
