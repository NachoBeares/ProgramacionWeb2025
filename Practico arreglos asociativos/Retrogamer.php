<?php

#Actividad 1

$videojuego = [
    "Titulo" => "The Legend of Zelda",
    "Precio" => 50, 
    "Año" => 1986,
    "Consola" => "NES"];

#Actividad 2

 foreach ($videojuego as $clave => $valor) {
    echo "$clave $valor <br>" ;

 }

 #Actividad 3

 $videojuego = ['stock' => 10];
 if ($videojuego  ['stock'] > 1) {
    echo "Quedan " , $videojuego['stock'] , " copias" ;
 }  

#Actividad 4

$inventario = [ "Titulo" => "The Legend of Zelda",
    "Precio" => 50, 
    "Año" => 1986,
    "Consola" => "NES"]
                
              
              





?>