<?php

require_once __DIR__ . '/../models/Categoria.php';

class CategoriaController{
    private Categoria $categoriaModel;

    public function __construct(PDO $conexion)
    {
        $this->categoriaModel = new Categoria($conexion);

    }
    public function listar()
    {
        $categorias = $this->categoriaModel->listar();

        require_once __DIR__ . '/../views/categorias/index.php';
    }
    public function crear()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
           
            $accion = $_POST['accion'] ?? 'crear';
            $nombre = trim($_POST['nombre'] ?? '');
            $descripcion =trim($_POST['descripcion'] ?? '');

            if($accion === 'crear'){
                if(!empty($nombre)){
                    $this->categoriaModel->crear($nombre, $descripcion);

                    header('Location:categorias.php');
                    exit;
                }
            } 

            if($accion === 'actualizar'){
                $id = (int)($_POST['id'] ?? 0);

                if($id > 0 && !empty($nombre)){
                    $this->categoriaModel->actualizar(
                        $id,
                        $nombre,
                        $descripcion
                    );

                    header('Location:categorias.php');
                    exit;
                }
            }

            if($accion === 'eliminar'){
                $id = (int)($_POST['eliminar_id'] ?? 0);
                if($id > 0){
                    $this->categoriaModel->eliminar($id);

                    header('Location:categorias.php');
                    exit;

                }
            }

        }
    }
    
}