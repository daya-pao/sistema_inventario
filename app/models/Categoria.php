<?php
 class Categoria {
    private PDO $conexion;
    
    public function __construct(PDO $conexion)
    {
        $this->conexion = $conexion;
    }

    public function listar(): array {
        $sql = " SELECT * FROM categorias ORDER BY id ASC";

        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();

        return 
        $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
    public function crear(string $nombre, string $descripcion):bool
    {
        $sql = "INSERT INTO categorias (nombre, descripcion )VALUES (:nombre, :descripcion)";
        $stmt = $this->conexion->prepare($sql);

        return $stmt->execute([
            ':nombre' => $nombre,
            ':descripcion'=>$descripcion
        ]);
    }
    public function buscarPorId(int $id):array|false
    {
        $sql = "SELECT * FROM categorias WHERE id = :id";
        $stmt= $this->conexion->prepare($sql);
        $stmt->execute([
            ':id' => $id
        ]);
        
        return 
        $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function actualizar(int $id, string $nombre, string $descripcion):bool
    {
        $sql = "UPDATE categorias SET nombre = :nombre, descripcion = :descripcion 
        WHERE id = :id";

        $stmt = $this->conexion->prepare($sql);

        return $stmt->execute([
            ':id' => $id,
            ':nombre' => $nombre,
            ':descripcion' => $descripcion
        ]);
    }
    public function eliminar(int $id):bool
    {
        $sql = "DELETE FROM categorias WHERE id = :id";
        $stmt =$this->conexion->prepare($sql);
        return $stmt->execute([':id' => $id ]);
    }

}
