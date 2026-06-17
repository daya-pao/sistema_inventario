<?php
require_once __DIR__ . '/../models/Usuario.php';

class AuthController {
    private Usuario $usuarioModel;

    public function __construct(PDO $conexion)
    {
       $this->usuarioModel = new Usuario($conexion);
    }
    public function login(){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $correo = $_POST['correo'] ?? '';
            $password = $_POST['password'] ?? '';

            $usuario = $this->usuarioModel->buscarPorCorreo($correo);

           if($usuario && password_verify($password, $usuario['password'])){
              $_SESSION['usuario_id'] = $usuario['id'];
              $_SESSION['usuario_nombre'] = $usuario['nombre'];

              header('Location:dashboard.php');
              exit;

           }else{
             echo "correo o contraseña incorrectos";
           }
            return;
        }
        require_once __DIR__ . '/../views/auth/login.php';
    }
}