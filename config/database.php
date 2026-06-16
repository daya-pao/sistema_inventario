<?php

$host ="localhost";
$dbname ="inventario_db";
$username ="root";
$password ="";

try{
    $conexion = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );

    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    die("error de conexión: " .$e->getMessage());
}