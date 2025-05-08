<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $edad = intval($_POST["edad"]);
    if ($edad >= 11 && $edad <= 19) {
       echo " <p> Puede participar en la promoción</p>";
    } else {
        echo " <p> No puede participar en la promoción </p>";
    }
}else{
    echo "Error en la solicitud";
}   

?>