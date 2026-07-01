<?php
require_once __DIR__  . '/../models/Cliente.php';

class ClienteController{
    private cliente $clienteModel;

    public function __construct(PDO $conexion)
    {
        $this->clienteModel = new cliente($conexion);
    }
    public function listar(){
        $clientes = $this->clienteModel->listar();

        require_once __DIR__ .'/../views/clientes/index.php';
    }
    public function crear(){
        if($_SERVER["REQUEST_METHOD"] ===  'POST'){

            $accion = $_POST['accion'] ?? 'crear';
            $nombre = trim($_POST['nombre'] ?? '');
            $documento = trim($_POST['documento'] ?? '');
            $telefono = trim($_POST['telefono'] ?? '');
            $correo= trim($_POST['correo'] ?? '');
            $direccion= trim($_POST['direccion'] ?? '');

             if($accion === 'crear'){
                if(!empty($nombre) && $documento && $telefono){
                    $this->clienteModel->crear($nombre, $documento, $telefono,$correo, $direccion);

                    header('Location:clientes.php');
                    exit;
                }
            } elseif ($accion === 'actualizar'){
                $id = (int) ($_POST['id'] ?? 0 );

                if( $id > 0 && !empty ($nombre) && $documento && $telefono){
                    $this->clienteModel->actualizar(
                        $id,
                        $nombre,
                        $documento,
                        $telefono,
                        $correo,
                        $direccion
                    );
                    
                    header('Location:clientes.php');
                    exit;
                }
            }elseif($accion === 'eliminar'){
                $id = (int)($_POST['eliminar_id'] ?? 0);
                if($id > 0){
                    $this->clienteModel->eliminar($id);

                    header('Location:clientes.php');
                    exit;

                }
            }

        }
    }


}