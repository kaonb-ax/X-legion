<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=formation_simplon;charset=utf8', 'atax', 'kaonb');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}
catch(Exception $e) {
    echo 'Exception -> ';
    var_dump($e->getMessage());
}
?>
