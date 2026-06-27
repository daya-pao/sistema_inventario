<?php
require_once __DIR__ . '/../models/producto.php';
require_once __DIR__ . '/../models/Categoria.php';
class ProductoController{
    private  Producto $productoModel;
    private  Categoria $categoriaModel;

    public function __construct( PDO $conexion){
        $this->productoModel = new Producto($conexion);
        $this->categoriaModel = new Categoria($conexion);
    }
    public function listar(){

      echo 'Estoy en listar';
        $productos = $this->productoModel->listar();
        $categorias = $this->categoriaModel->listar();

       require_once __DIR__ .'/../views/productos/index.php';
    }
    public function crear()
    {
        // Solo procesamos si el formulario fue enviado
       if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'])) 
        {
            $accion = $_POST['accion'] ?? 'crear';
            $nombre = trim($_POST['nombre'] ?? '');
            $descripcion = trim($_POST['descripcion'] ?? '');
            $precio = (float)($_POST['precio'] ?? 0);
            $stock = (int)($_POST['stock'] ?? 0);
            $categoria_id = (int)($_POST['categoria_id'] ?? 0);
        
            if($accion === 'crear'){
                // Validación estricta: todos los campos necesarios deben tener valor
                if (!empty($nombre) && $precio > 0 && $categoria_id > 0)
                {
                    $this->productoModel->crear($nombre, $descripcion, $precio, $stock, $categoria_id);
                    
                    // Redirigir siempre después de un POST para evitar reenvíos
                    header('Location: productos.php');
                    exit;
                }
               
            } elseif ($accion === 'actualizar') {

                $id = (int) ($_POST['id'] ?? 0);
            
                if ($id > 0 && !empty($nombre) && $precio > 0 && $categoria_id > 0) {
            
                    $this->productoModel->actualizar(
                        $id,
                        $nombre,
                        $descripcion,
                        $precio,
                        $stock,
                        $categoria_id
                    );
            
                    header('Location: productos.php');
                    exit;
                }
            }
            if($accion === 'eliminar'){
                $id = (int)($_POST['eliminar_id'] ?? 0);
                if($id > 0){
                    $this->productoModel->eliminar($id);

                    header('Location:productos.php');
                    exit;

                }
            }
        }
    }
  
}