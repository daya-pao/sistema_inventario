<?php
session_start();

if(!isset($_SESSION['usuario_id'])){
    header('Location:index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>BIENVENIDO<?php echo $_SESSION['usuario_nombre'];?></h1>

    <P>Sistema de Inventario</P>

    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
