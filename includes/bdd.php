<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=Xlegion;charset=utf8', 'atax', 'kaonb');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}
catch(Exception $e) {
    echo 'Exception -> ';
    var_dump($e->getMessage());
}
?>
