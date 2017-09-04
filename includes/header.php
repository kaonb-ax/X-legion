<!-- site de la Dixieme legion -->
<!-- ======== by Atax ======== -->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>club de football américain narbonne</title>
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/profileStyle.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
    <!--Jquery-->
    <script src="assets/js/jquery.3.2.1.min.js"></script>
  </head>
  <body>
    <header class="FlexAlign">
        <span><a href="accueil.php" id="club">Team</a></span>
        <span><a href="roster.php" id="roster">Roster</a></span>
        <img src="assets/img/Xlegion_banner.png" alt="logo dixième légion" id="legion">
        <span><a href="#" id="contact">Profile</a></span>
        <span><a href="#" id="user">Login</a></span>
    </header>
    <h2 class="user_name">Hello
    <?php
      if(isset($_SESSION['login'])&&($_SESSION['login']===TRUE)){
        echo $_SESSION['name']."!</h2>";
        echo '<a href="#">
                <div class="logout">
                    <h2>log out </h2>
                    <i class="fa  fa-sign-out" aria-hidden="true"></i>
                </div>
              </a>';
      }else{
        echo 'you !</h2>';
      }  ?>
    <div id="modal_frame" class="hidden">
      <article class="formulaire">
        <form class="text flex column" action="traitement.php" method="POST">
          <a class="sign_in_out" href="#"><i class="fa fa-times-circle-o fa-3x" aria-hidden="true"></i></a>
          <h1 class="title">Login</h1>
          <div class="login_container">
            <input type="text" id="login_pseudo" name="log_pseudo" autofocus placeholder="Nickname">
            <input type="password" id="login_pw" name="log_password" placeholder="password">
            <button type="submit" id="login" class="submit login" name="login">Login</button>
          </div>
          <a href="#" class="forgot" >Forgot your password?</a>
          <h1>create an account</h1>
          <label for="pseudo">Nickname</label>
          <input type="text" id="pseudo" name="pseudo" placeholder="Nickname">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="my.address@mymail.com">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="6 letters min">
          <input type="password" id="repassword" name="repassword" placeholder="same password">
          <button type="submit" id="submit" class="submit" name="create">Sign In</button>
        </form>
      </article>
    </div>
<!-- Fin de header debut du coeur de page -->
