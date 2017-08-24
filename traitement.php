<?php
//==========appel de la BDD============
session_start();
require_once("./includes/bdd.php");
require_once("./includes/crypto.php");
$msg = 'error base';
if (isset($_POST['create'])) {
  $name = $_POST["pseudo"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $repassword = $_POST["repassword"];
  if($password === $repassword){
    $pass = cryptMyPass($password);
    $req = $bdd->prepare('INSERT INTO users(name, email, password)
                          VALUES(:name, :email, :password)');
    $req->execute(array(
        'name' => $name,
        'email' => $email,
        'password' => $pass
      ));
    $msg = 'createOk';
  }
//===========LOGIN==================
}else if (isset($_POST['login'])){
  $name = $_POST["log_pseudo"];
  $password = $_POST["log_password"];
  try {
    $req = $bdd->prepare('SELECT * FROM users WHERE name = "'.$name.'"');
    $req->execute();
    $result = $req->fetch(PDO::FETCH_ASSOC);
    if(password_verify($password, $result["password"])){
      echo "OK";
      $_SESSION['login'] = TRUE;
      $_SESSION['name'] = $result['name'];
      $_SESSION['id'] = $result['id'];
            var_dump($_SESSION);
      $msg = 'passOk';
    }

  }
  catch(Exception $e) {
      var_dump($e->getMessage());
  }
}
echo " -".$msg." 2";
header('location:accueil.php?msg='.$msg);
exit();
?>
