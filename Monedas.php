<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cantidadEnPesos = floatval($_POST['pesos']);
    $valorDolar = 40;
    $valorBRL = 8
    $valorEuro = 43 //Ejemplo: 1 USD = 38.5 UYU (Se puede actualizar)
    $cantidadTotalDolares = $cantidadEnPesos / $valorDolar;
     $cantidadTotalBRL = $cantidadEnPesos / $valorBRL;
     $cantidadTotalEuro = $cantidadEnPesos / $valorEuro;
    echo "Resultado de la conversión";

    if ($valorEuro >= 0)
    echo "$cantidadEnPesos pessos uruguayos equivalen a " . $cantidadTotalEuro . " euros.";
    if ($valorBRL >= 0)
    echo "$cantidadEnPesos pessos uruguayos equivalen a " . $cantidadTotalBRL . " reales brasileños.";
    if ($valorDolar >= 0)
    echo " $cantidadEnPesos pesos uruguayos equivalen a " . $cantidadTotalDolares . " dolares americanos.";
}else{
    echo "Error en la solicitud";

}
?>