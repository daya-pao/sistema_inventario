<?php

class Producto {
    private PDO $conexion ; 
    public function __construct( PDO $conexion)
    {
      $this->conexion = $conexion;
    }

    public function listar()
    {
        $sql = "SELECT productos.*,categorias.nombre AS
         categoria FROM productos INNER JOIN categorias ON 
         productos.categoria_id = categorias.id";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();

        return 
        $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function crear( string $nombre, string $descripcion, 
      float $precio, int $stock, int $categoria_id):bool
      {
        $sql = "INSERT INTO productos (nombre, descripcion, precio, stock, categoria_id)
        VALUES (:nombre, :descripcion, :precio, :stock, :categoria_id)";

        $stmt = $this->conexion->prepare($sql);
        return
        $stmt->execute([':nombre' => $nombre,
        ':descripcion' => $descripcion,
        ':precio' => $precio,
        ':stock' => $stock,
        ':categoria_id' => $categoria_id
        ]);
    }
    public function obtenerPorId(int $id ){
       $sql = "SELECT * FROM productos WHERE id = :id";
        $stmt= $this->conexion->prepare($sql);
        $stmt->execute([
            ':id' => $id
        ]);
        
        return 
        $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizar(int $id, string $nombre, string $descripcion,
       float $precio, int $stock,int $categoria_id){
        
        $sql = "UPDATE productos SET nombre = :nombre, descripcion = :descripcion,
        precio = :precio,  stock = :stock,  categoria_id = :categoria_id
        WHERE id = :id";

        $stmt = $this->conexion->prepare($sql);

        return $stmt->execute([
            ':id' => $id,
            ':nombre' => $nombre,
            ':descripcion' => $descripcion,
            ':precio' => $precio,
            ':stock' => $stock,
            ':categoria_id' => $categoria_id
        ]);

    }
     public function eliminar(int $id):bool
    {
        $sql = "DELETE FROM productos WHERE id = :id";
        $stmt =$this->conexion->prepare($sql);
        return $stmt->execute([':id' => $id ]);
    }
}