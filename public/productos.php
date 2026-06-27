<?php
session_start();

require_once '../config/database.php';
require_once '../app/controllers/ProductoController.php';

$controller = new ProductoController($conexion);
$controller->crear();
$controller->listar();