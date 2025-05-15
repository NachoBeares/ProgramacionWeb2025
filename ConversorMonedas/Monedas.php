<?php

    
    $valorMoneda = [
        40,
        8,
        43,
        "hola123"
        ];

        var_dump($valorMoneda);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $moneda = $_POST['moneda'];
    $cantidad = intval($_POST['cantidad']);


    
    $valorDolar = 40;
    $valorBRL = 8;
    $valorEuro = 43; 

    $cantidadTotalDolares = $cantidad / $valorDolar;
     $cantidadTotalBRL = $cantidad / $valorBRL;
     $cantidadTotalEuro = $cantidad / $valorEuro;
    echo "Resultado de la conversión";

    if ($moneda == "USD")
    echo "$cantidad pessos uruguayos equivalen a " . $cantidadTotalDolares . " dolares americanos.";
    if ($moneda == "EUR")
    echo "$cantidad pessos uruguayos equivalen a " . $cantidadTotalEuro . " euros europeos";
    if ($moneda == "BRL")
    echo " $cantidad pesos uruguayos equivalen a " . $cantidadTotalBRL . " reales brasileños.";
}else{
    echo "Error en la solicitud";

}
?>