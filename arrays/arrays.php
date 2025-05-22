<?php

$planetas=[]; 
$planetas[] = 'Marte';
var_dump($planetas);
$planetas[] = 'Tierra' ;
var_dump($planetas);
$planetas[] = 'Jupiter' ;
var_dump($planetas);

foreach ($planetas as $planeta) {
    echo "El planeta es: $planeta <br>";
}
?>   