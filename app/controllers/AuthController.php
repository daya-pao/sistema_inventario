<?php

require_once __DIR__ . '/../models/Usuario.php';

class AuthController{
    private Usuario $usuarioModel;

    public function __construct(PDO $conexion)
    {
       $this->usuarioModel = new Usuario($conexion);
    }
    public function login()
    {
        echo "Método login ejecutado";
    }
}
