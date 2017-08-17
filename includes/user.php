
<script type="text/javascript">
  $('#user').addClass("active");
  $('#club').removeClass("active");
  $('#roster').removeClass("active");
  $('#contact').removeClass("active");
</script>
<link href="assets/css/styleForm.css.css" rel="stylesheet">
<div class="contactBody">
  <div class="middle0"></div>
  <article class="formulaire">
    <form class="text flex column" action="traitement.php" method="POST">
        <h1 class="title">Welcome</h1>
        <h4>free account</h4>
        <label for="pseudo">Nickname</label>
        <input type="text" id="pseudo" name="pseudo" value="" autofocus placeholder="Nickname">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="" placeholder="my.address@mymail.com">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="6 letters min">
        <input type="password" id="repassword" name="repassword" placeholder="same password">
        <a href="#" class="forgot" >Forgot your password?</a>
        <button type="submit" id="submit" class="submit" name="button">Sign In</button>
    </form>
</article>
</div>
