<?php
$host = "localhost"; // o la IP de tu servidor MySQL
$user = "tienda";
$password = "1234";
$database = "tienda";

try {
    // Crear la conexión con PDO
    $conexion = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    // Establecer el modo de error de PDO a excepción
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";
} catch (PDOException $e) { // Captura de excepciones
    echo "Error: " . $e->getMessage();
} //esto siempre es asi para conectarse a la base de datos


?>