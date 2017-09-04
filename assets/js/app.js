$( document ).ready(function() {
  console.log( "app.js ready!" );

  $('#user').click(function() {
    $('#modal_frame').removeClass("hidden");
  });

  $('.sign_in_out').click(function() {
      $('#modal_frame').addClass("hidden");
    });

    $('.logout').click(function() {
      $('#modal_frame').addClass("hidden");
    });

    //REQUETE LOGOUT=========================
    $('.logout').click(function(){
        $.ajax({
          method: "POST",
          url:"traitement.php",
          data:{logout: true}
        }).done(function(){
          $(".user_name").html("Goodbye !");
          $(".logout").addClass("hidden");
          document.location.href="accueil.php";
        })
      });
      //REQUETE LOG CONTROL=========================
    $('#contact').click(function(){
      console.log("click profile");
        $.ajax({
          method: "POST",
          url:"traitement.php",
          data:{log_control: true},
          success: function(response) {
              if (response == "true"){
                document.location.href="profile.php";
              }else{
                document.location.href="accueil.php?msg=logRefused";
              }
          }
        })
      });

//==fin du Document Ready==
});
