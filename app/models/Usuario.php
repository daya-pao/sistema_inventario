<?php 

class Usuario{
    private PDO $conexion;
    public function __construct(PDO $conexion)
    {
        $this->conexion = $conexion;
    }

    public function buscarPorCorreo(string $correo)
    {
        $sql = "SELECT * FROM usuario WHERE correo = :correo";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(':correo',$correo);
        $stmt->execute();

        return 
        $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
}