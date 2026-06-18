<?php

session_start();
require_once '../config/database.php';
require_once '../app/controllers/CategoriaController.php';

$controller = new CategoriaController($conexion);
$controller->listar();