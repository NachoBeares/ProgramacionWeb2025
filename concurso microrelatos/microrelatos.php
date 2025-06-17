<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cantPalabras = $_POST['relato'];
    $palabras = explode(' ', $cantPalabras);
    
    if ($palabras[0] >= 5) {
        echo "El relato supera las palabras";
    } else {
        echo "El relato ha sido enviado";
    }


} else {
    echo "Hubo un error";
}

?>