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
    $profile = $bdd->prepare('SELECT name, email FROM `users`WHERE id = "'.$_SESSION["id"].'"');
    $profile->execute();

    $result = $profile->fetch(PDO::FETCH_ASSOC);

      echo"
      <div class='profile p_name'>
        <h2>profil: ".$result["name"]."</h2>
      </div>
      <div class='profile p_email'>
        <h2>email: ".$result["email"]."</h2>
      </div>";
    ?>
    <form class='' action='traitement.php' method='POST'>
      <button type='submit' name='delete_p' class= 'submit'>Supprimé Profil</button>
    </form>
  </div>
</div>
