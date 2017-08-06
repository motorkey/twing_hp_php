$(function() {

  //
  var breakpoint = 640;
  var topCoverFileWidth = 833;
  var topCoverFileHeight = 278;
  var topCoverFileRatio = topCoverFileHeight / topCoverFileWidth;

  var $window = $('window');
  var $studentTopEventTitle = $('.studentTopEventTitle');

  //
  /*var $topCover = $('.studentTopCover');
  $topCover.height($topCover.width() * topCoverFileRatio / 2);*/

  // hamburger
  $(".hamburger").on("click", ()=> {
      $(".topHeader__hamburger__menu").slideToggle(300);
      $(this).toggleClass("active");
      $(".hamburger__line--top").toggleClass('line--top--toCloseBtn');
      $(".hamburger__line--mid").toggleClass('line--mid--toCloseBtn');
      $(".hamburger__line--bot").toggleClass('line--bot--toCloseBtn');
  });

  /*
   * resize

  $window.resize(function(){
    if($window.width < breakpoint){
      var wholeTitle = $studentTopEventTitle.
    }
  });*/

});
