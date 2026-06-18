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

}