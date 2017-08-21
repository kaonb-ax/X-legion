<?php
//==========appel de la BDD============
require_once("./includes/bdd.php");

$name = $_POST["pseudo"];
$email = $_POST["email"];
$password = $_POST["password"];
$repassword = $_POST["repassword"];

if($password === $repassword){
  require_once("./includes/crypto.php");
  $pass = $cryptoPass;
}else{
  header('http://localhost/myHtml/Projets/XLegion/');
  exit();
}
$req = $bdd->prepare('INSERT INTO users(name, email, password) VALUES(:name, :email, :password)');
$req->execute(array(
    'name' => $name,
    'email' => $email,
    'password' => $pass
  ));
header('./');
exit();
?>
