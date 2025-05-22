<?php

$Tripulacion = [
    'Alex Rider' ,
    'Mia Kovalik',
    'Raj Patel',
    'Elena Vega', 
    'Jules Bergman' 


] ; 
$contador_tripulacion = 1 ;

echo "$Tripulacion[2] <br>" ;

$Tripulacion[1] = 'Nadia Petrov' ;

$Tripulacion[] = 'Sam Carter' ;
$Tripulacion[] = 'Leo Wu' ;
$Tripulacion[] = 'Zara Khan' ;


unset($Tripulacion[0]);
 function busqueda() 

array_unshift($Tripulacion, 'Dmitri Volkov' , 'Yuki Tanaka' );

foreach ($Tripulacion as $tripulante) {
    echo "El tripulante es $contador_tripulacion : $tripulante <br>";
     $contador_tripulacion ++ ;

    
 busqueda();




}



?>