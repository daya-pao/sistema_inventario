<?php

class cliente {
    private PDO $conexion;

    public function __construct(PDO $conexion)
    {
       $this->conexion = $conexion;
    }

    public function listar(){
        $sql = " SELECT * FROM clientes ORDER BY id DESC";

        $stmt = $this->conexion->prepare($sql);
        $stmt ->execute();

        return
        $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function crear(string $nombre, string $documento, 
        string $telefono, string $correo, string $direccion ):bool{

        $sql = "INSERT INTO clientes ( nombre, documento, telefono, correo, direccion)
        VALUES (:nombre, :documento, :telefono, :correo, :direccion)";

        $stmt = $this->conexion->prepare($sql);

        return $stmt->execute([
            ':nombre' => $nombre,
            ':documento' => $documento,
            ':telefono' => $telefono,
            ':correo' => $correo,
            ':direccion' => $direccion
        ]);
    }
    public function ObtenerPorId(int $id ){
        $sql =  "SELECT * FROM clientes WHERE id = :id";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute([
            'id' => $id
        ]);

        return 
        $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function actualizar(int $id ,string $nombre, string $documento, 
     string $telefono, string $correo, string $direccion){

      $sql = "UPDATE  clientes SET nombre =:nombre, documento = :documento, telefono = :telefono,
       correo = :correo, direccion = :direccion WHERE id = :id";

       $stmt = $this->conexion->prepare($sql);

       return  $stmt->execute([
          ':id' => $id,
          ':nombre' => $nombre,
          ':documento' => $documento,
          ':telefono' => $telefono,
          ':correo' => $correo,
          ':direccion' => $direccion
        ]);

    }
    public function eliminar(int $id ):bool{
        $sql  = "DELETE FROM clientes WHERE id = :id";
        $stmt =$this->conexion->prepare($sql);
        return $stmt->execute([':id' => $id ]);
    }

}