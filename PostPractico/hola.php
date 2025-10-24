<?php

header('Content-Type: application/json');


$datos = json_decode(file_get_contents('php://input'), true);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proveedores_db";

try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $stmt = $conn->prepare("INSERT INTO proveedores (nombre, razon_social, correo, telefono, tipo_producto) 
                           VALUES (:nombre, :rsocial, :correo, :numero, :tipo_producto)");

    // Vincular parámetros
    $stmt->bindParam(':nombre', $datos['Nombre']);
    $stmt->bindParam(':rsocial', $datos['RSocial']);
    $stmt->bindParam(':correo', $datos['correo']);
    $stmt->bindParam(':numero', $datos['Numero']);
    $stmt->bindParam(':tipo_producto', $datos['TipoProducto']);


    $stmt->execute();

    echo json_encode(['status' => 'success', 'message' => 'Proveedor registrado correctamente']);

} catch(PDOException $e) {
   
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}

$conn = null;
?>