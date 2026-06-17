<?php 
session_start();
require_once '../config/database.php';
require_once '../app/controllers/AuthController.php';

$authConttroller  = new AuthController($conexion);
$authConttroller->login();