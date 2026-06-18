<?php
 class Categoria {
    private PDO $conexion;
    
    public function __construct(PDO $conexion)
    {
        $this->conexion = $conexion;
    }

    public function listar(): array {
        $sql = " SELECT * FROM categorias ORDER BY id DESC";

        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();

        return 
        $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

 }