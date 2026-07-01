<?php

session_start();
require_once '../config/database.php';
require_once '../app/controllers/ClienteController.php';

$controller = new ClienteController($conexion);
$controller->crear();
$controller->listar();
