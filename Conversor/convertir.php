<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cantidadEnPesos = floatval($_POST['pesos']);
    $valorDolar = 40; //Ejemplo: 1 USD = 38.5 UYU (Se puede actualizar)
    $cantidadTotalDolares = $cantidadEnPesos / $valorDolar;
    echo "Resultado de la conversión";
    echo " $cantidadEnPesos pessos uruguayos equivalen a " . $cantidadTotalDolares . " dolares americanos.";
}else{
    echo "Error en la solicitud";

}
?>