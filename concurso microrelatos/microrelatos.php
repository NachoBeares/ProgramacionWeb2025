<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cantPalabras = $_POST['relato'];

    $palabras = explode(' ', $cantPalabras);
    $cantidadPalabras = count($palabras);

    $cantidadCaracteres = strlen($cantPalabras);


    if ($cantidadPalabras > 100 && $cantidadCaracteres > 700) {
        echo "Rechazado por tener más de 100 palabras y más de 700 caracteres.";
    } elseif ($cantidadPalabras > 100) {
        echo "Rechazado por tener más de 100 palabras.";
    } elseif ($cantidadCaracteres > 700) {
        echo "Rechazado por tener más de 700 caracteres.";
    } else {
        echo "Aceptado el relato cumple con las reglas.";
    }
} else {
    echo "Error no se envió el formulario correctamente.";
}
?>
