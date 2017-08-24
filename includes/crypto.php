<?php
function cryptMyPass($mdp){
  $cryptoPass = password_hash($mdp, PASSWORD_DEFAULT);
  return $cryptoPass;
}
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
