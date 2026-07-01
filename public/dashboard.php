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
    <title>Dashboard - Mi Inventario</title>

    <link rel="stylesheet" href="dashboard.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<style>
    *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#edf2f7;
}

/* ==========================
    CONTENEDOR PRINCIPAL
========================== */

.dashboard{
    display:flex;
    min-height:100vh;
}

/* ==========================
    SIDEBAR
========================== */

.sidebar{
    width:250px;
    background:#1b4332;
    color:#fff;
    padding:17px;
}

.logo{
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom:40px;
}
.logo h2{
    font-size:25px;
}

.sidebar ul{
    list-style:none;
}

.sidebar li{
    margin:12px 0;
}

.sidebar a{
    color:white;
    text-decoration:none;
    display:flex;
    align-items:center;
    gap:12px;
    padding:14px;
    border-radius:10px;
    transition:.3s;
}

.sidebar a:hover{
    background:#2d6a4f;
}

.activo{
    background:#2d6a4f;
}

.sidebar i{
    width:20px;
    text-align:center;
}

/* ==========================
    CONTENIDO
========================== */

.contenido{
    flex:1;
    padding:35px;
}

/* ==========================
    TOPBAR
========================== */

.topbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
}

.topbar img{
    height: 30px;
}
.topbar h1{
    color:#1b4332;
    font-size:34px;
}

.img-titulo{
    display: flex;
    align-items: center;
    justify-content: center;
}
.img-titulo img{
    height: 40px;
}
.usuario{
    background:white;
    padding:12px 20px;
    border-radius:12px;
    box-shadow:0 4px 10px rgba(0,0,0,.08);
    display:flex;
    align-items:center;
    gap:10px;
}

.usuario i{
    font-size:22px;
    color:#1b4332;
}

/* ==========================
    TARJETAS
========================== */

.cards{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:20px;
    margin-bottom:35px;
}

.card{
    background:white;
    border-radius:15px;
    padding:25px;
    box-shadow:0 5px 15px rgba(0,0,0,.08);
    border-top:6px solid #2d6a4f;
    transition:.3s;
}

.card:hover{
    transform:translateY(-5px);
}

.card h3{
    color:#666;
    margin-bottom:10px;
}

.card h2{
    color:#1b4332;
    font-size:38px;
}

/* ==========================
    TABLA
========================== */

.tabla{
    background:white;
    border-radius:15px;
    padding:25px;
    box-shadow:0 5px 15px rgba(0,0,0,.08);
}

.tabla h2{
    color:#1b4332;
    margin-bottom:20px;
}

table{
    width:100%;
    border-collapse:collapse;
}

thead{
    background:#2d6a4f;
    color:white;
}

th{
    padding:15px;
    text-align:left;
}

td{
    padding:15px;
    border-bottom:1px solid #ddd;
}

tbody tr:hover{
    background:#d8f3dc;
}
</style>
<body>

<div class="dashboard">

    <!-- MENU -->
    <aside class="sidebar">

        <div class="logo">
            <h2>Mi Inventario</h2>
           
        </div>

        <nav>

            <ul>

                <li>
                    <a href="#" class="activo">
                        <i class="fa-solid fa-house"></i>
                        Dashboard

                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa-solid fa-box"></i>
                        Productos
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa-solid fa-layer-group"></i>
                        Categorías
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa-solid fa-users"></i>
                        Clientes
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa-solid fa-cart-shopping"></i>
                        Ventas
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa-solid fa-user-gear"></i>
                        Usuarios
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa-solid fa-chart-column"></i>
                        Reportes
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa-solid fa-gear"></i>
                        Configuración
                    </a>
                </li>

                <li>
                    <a href="logout.php">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        Cerrar sesión
                    </a>
                </li>

            </ul>

        </nav>

    </aside>

    <!-- CONTENIDO -->

    <main class="contenido">

        <!-- TOPBAR -->

        <div class="topbar">
            <div class="img-titulo">
                <h1>Dashboard</h1>
                <img src="/sistema_inventario/img/image-side.png" alt="logo">
            </div>
            <div class="usuario">
                <i class="fa-solid fa-circle-user"></i>
                Hola,<?php echo $_SESSION['usuario_nombre'];?> 
            </div>

        </div>

        <!-- TARJETAS -->

        <section class="cards">

            <div class="card">
                <h3>Total Productos</h3>
                <h2>120</h2>
            </div>

            <div class="card">
                <h3>Categorías</h3>
                <h2>15</h2>
            </div>

            <div class="card">
                <h3>Clientes</h3>
                <h2>38</h2>
            </div>

            <div class="card">
                <h3>Ventas</h3>
                <h2>42</h2>
            </div>

        </section>

        <!-- TABLA -->
             <section class="tabla">

            <h2>Últimos Productos</h2>

            <table>

                <thead>

                    <tr>

                        <th>ID</th>
                        <th>Producto</th>
                        <th>Categoría</th>
                        <th>Precio</th>
                        <th>Stock</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Mouse Logitech</td>
                        <td>Tecnología</td>
                        <td>$80.000</td>
                        <td>25</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Teclado Mecánico</td>
                        <td>Tecnología</td>
                        <td>$150.000</td>
                        <td>18</td>
                    </tr>

                   

                </tbody>

            </table>

        </section>
        

    </main>

</div>

</body>
</html>