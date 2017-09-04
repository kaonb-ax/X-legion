<?php
//==========appel de la BDD============
session_start();
require_once("./includes/bdd.php");
require_once("./includes/crypto.php");
$msg = 'error';
//===========CREATE==================
if (isset($_POST['create'])) {
  $name = $_POST["pseudo"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $repassword = $_POST["repassword"];
  if($password === $repassword){
    $pass = cryptMyPass($password);
    $req = $bdd->prepare('INSERT INTO users(name, email, password)
                          VALUES(:name, :email, :password)');
    $new_id = $bdd->lastInsertId();
    $req->execute(array(
        'name' => $name,
        'email' => $email,
        'password' => $pass
      ));
    $_SESSION['login'] = TRUE;
    $_SESSION['name'] = $name;
    $_SESSION['id'] = $new_id;
    $msg = 'createOk';
  }
//===========LOGIN==================
}else if (isset($_POST['login'])){
  $name = $_POST["log_pseudo"];
  $password = $_POST["log_password"];
  try {
    $req = $bdd->prepare('SELECT * FROM users
                          WHERE name = "'.$name.'"');
    $req->execute();
    $result = $req->fetch(PDO::FETCH_ASSOC);
    if(password_verify($password, $result["password"])){
      echo "OK";
      $_SESSION['login'] = TRUE;
      $_SESSION['name'] = $result['name'];
      $_SESSION['id'] = $result['id'];
      $msg = 'passOk';
    }

  }
  catch(Exception $e) {
      var_dump($e->getMessage());
  }
//===========LOGOUT==================
}else if (isset($_POST['logout'])){
  $_SESSION['login'] = FALSE;
  $_SESSION['name'] = $result[''];
  $_SESSION['id'] = $result[''];
  return TRUE;
  exit();
//===========LOG CONTROl==================
}else if (isset($_POST['log_control'])){
  if($_SESSION['login'] == TRUE){
    echo "true";
    exit();
  }else{
    echo "false";
    exit();
  }
//===========DELETE PROFIL==================
}else if (isset($_POST['delete_p'])){
    $req = $bdd->prepare('DELETE FROM users WHERE id = :id');
    $req->execute(array(
        'id' => $_SESSION['id']
        ));
        $_SESSION['login'] = FALSE;
        $_SESSION['name'] = $result[''];
        $_SESSION['id'] = $result[''];
    $msg = 'deleteOk';
}
echo " -".$msg." 2";
header('location:accueil.php?msg='.$msg);
exit();
?>
