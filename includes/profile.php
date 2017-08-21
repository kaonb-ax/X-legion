<script type="text/javascript">
  $('#contact').addClass("active");
  $('#club').removeClass("active");
  $('#user').removeClass("active");
  $('#roster').removeClass("active");
</script>
<div class="contactBody">
  <div class="middle0"></div>
  <div class="whiteBox">
    <?php
    include("bdd.php");
    $profile = $bdd->prepare('SELECT name, email FROM `users`');
    $profile->execute();

    while($donnee = $profile->fetch()){
      echo"
      <div class='profile p_pic'>
      </div>
      <div class='profile p_name'>
        <h2>profil: ".$donnee['name']."</h2>
      </div>
      <div class='profile p_email'>
        <h2>email: ".$donnee['email']."</h2>
      </div>";
    }
    ?>
  </div>
</div>
