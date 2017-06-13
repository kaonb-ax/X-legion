$( document ).ready(function(){
console.log( "slide2 ready!" );
// =================OPEN=====================
var count = false;
$(".closeJust-x").click(function(){
  console.log("count = "+count);
 if (count === false) {
   $('#fText').removeClass("closeJust-x");
   $('#fText').addClass("openJust-x");
   $('#SlideText2').fadeIn( 600 );
   $('#SlideText2').addClass("mainTextAjust");
   //div flag top
   $('#top').animate({'background-position-y': '-=9em'});
   // //div flag bot
   $('#bot').animate({'background-position-y': '+=9em'});
   // //div flag right
   $('#right').animate({'background-position-x': '+=15em'});
   // //div flag  left
   $('#left').animate({'background-position-x': '-=14em'});
   count = true;
 }else{
   // div logo texte
   $('#fText').addClass("closeJust-x");
   $('#fText').removeClass("openJust-x");
   $('#SlideText2').fadeOut( 10 );
   $('#SlideText2').removeClass("mainTextAjust");
   //div flag top
   $('#top').animate({'background-position-y': '+=9em'});
   // //div flag bot
   $('#bot').animate({'background-position-y': '-=9em'});
   // //div flag right
   $('#right').animate({'background-position-x': '-=15em'});
   // //div flag  left
   $('#left').animate({'background-position-x': '+=14em'});
   count = false;
 }
})
// shake effect===============

//fin du doc ready
});
