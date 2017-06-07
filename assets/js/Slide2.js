$( document ).ready(function(){
console.log( "slide2 ready!" );
// =================OPEN=====================
$(".closeJust-x").click(function(){
  // div logo texte
  $('#fText').removeClass("closeJust-x");
  $('#fText').addClass("openJust-x");
  $('#SlideText2').removeClass("vanish");
  $('#SlideText2').addClass("mainTextAjust");
  //div flag top
  $('#top').addClass( "openTop" );
  //div flag bot
  $('#bot').addClass( "openBot" );
  //div flag right
  $('#right').addClass( "openRight" );
  //div flag  left
  $('#left').addClass( "openLeft" );
})
// =================CLOSE=====================
$(".openJust-x").click(function(){
  // div logo texte
  $('#fText').removeClass("openJust-x");
  $('#fText').addClass("closeJust-x");
  $('#SlideText2').removeClasss("mainTextAjust");
  $('#SlideText2').addClass("vanish");
  //div flag top
  $('#top').removeClass( "openTop" );
  $('#top').addClass( "closeTop" );
  //div flag bot
  $('#bot').removeClasss( "openBot" );
  $('#bot').addClass( "closeBot" );
  //div flag right
  $('#right').removeClass( "openRight" );
  $('#right').addClass( "closeRight" );
  //div flag  left
  $('#left').removeClass( "openLeft" );
  $('#left').addClass( "closeLeft" );
})
//fin du doc ready
});
