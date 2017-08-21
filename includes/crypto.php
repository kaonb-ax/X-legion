<?php
$options = [
    'cost' => 10,
    'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
];
$cryptoPass = password_hash("$password", PASSWORD_BCRYPT, $options)."\n";
//teste quel cost choisir par rapport au temp de calcul
// $timeTarget = 0.07; // 50 millisecondes
// $cost = 8;
// do {
//     $cost++;
//     $start = microtime(true);
//     password_hash("test", PASSWORD_BCRYPT, ["cost" => $cost]);
//     $end = microtime(true);
// } while (($end - $start) < $timeTarget);
// echo "Valeur de 'cost' la plus appropriée : " . $cost . "\n";
?>
