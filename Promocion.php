<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Edad = floatval($_POST['Edad']);
    echo " Su edad es apropiada para la promoción";
    if ($Edad > 19) {
        echo " No puede participar en la promoción";
        if ($Edad < 11 ) {
            echo " No puede participar en la promoción";
        
    } else {
        echo " Puede participar en la promoción";
    }
}else{
    echo "Error en la solicitud";
