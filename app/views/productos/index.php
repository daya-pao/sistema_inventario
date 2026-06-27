<?php $categorias = $categorias ?? [];?>
<?php $productos = $productos?? [];?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <h1>Productos</h1>
    <button type="button" onclick="mostrarFormulario()">Nueva Producto</button>

    <div id="formulario" style="display:none;"> 
        <form  method="POST">
          

            <label>Nombre</label>
            <br>
            <input type="text" name="nombre" id="nombre" value=" <?= $producto['nombre'] ?? '' ?>">
            <br>
            <label>Descripción</label>
            <br>
            <textarea name="descripcion" id="descripcion"><?= $producto['descripcion'] ?? '' ?></textarea>
            <br>
            <label>Precio</label>
            <br>
            <input type="number" name="precio" step="0.01" id="precio" <?= $producto['precio'] ?? '' ?>  required>
            <br>
            <label>Stock</label>
            <br>
            <input  type="number" name="stock" id="stock"  value=" <?= $producto['stock'] ?? '' ?> "required>
            <br>
            <label>Categoría</label><br>
            <select name="categoria_id" id="categoria_id" required>
                 <option value="" disabled selected>-- Selecciona una categoría --</option>
             
                 <?php foreach($categorias as $categoria): ?>
                     <option value="<?= $categoria['id'] ?>">
                         <?= $categoria['nombre'] ?>
                     </option>
                 <?php endforeach; ?>
            </select>
            <br><br>
            <button type="submit" id="btn-guardar">Guardar Producto</button>
                
            <input type="hidden" name="id" id="producto_id">

            <input
                type="hidden"
                name="accion"
                id="accion"
                value="crear">
            
            <input
                type="hidden"
                name="eliminar_id"
                id="eliminar_id">
        </form>
    </div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Categoria</th>
             <th>Acciones</th>
        </tr>
         <?php foreach($productos as $producto): ?>
        <tr>
            <td><?= $producto['id'] ?></td>
            <td><?= $producto['nombre'] ?></td>
            <td><?= $producto['descripcion'] ?></td>
            <td><?= $producto['precio'] ?></td>
            <td><?= $producto['stock'] ?></td>
            <td><?= $producto['categoria'] ?></td>
            <td> 
                <button 
                     type="button"
                     class="btn-editar"
                     data-id=<?= $producto['id'] ?>
                     data-nombre=<?= $producto['nombre'] ?>
                     data-descripcion=<?= $producto['descripcion'] ?>
                     data-precio=<?= $producto['precio'] ?>
                     data-stock=<?= $producto['stock'] ?>
                     data-categoria=<?= $producto['categoria_id'] ?>
                     >Editar
                </button>
                <button 
                    type="button"
                    class="btn-eliminar"
                    data-id="<?= $producto['id'] ?>"
                    >Eliminar
                </button>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>
<script>
    function mostrarFormulario(){
        document.getElementById('formulario').style.display='block'
    }
    document.querySelectorAll('.btn-editar').forEach(boton=>{
        boton.addEventListener('click',function(){
            document.getElementById('producto_id').value = this.dataset.id;
            document.getElementById('nombre').value = this.dataset.nombre;
            document.getElementById('descripcion').value = this.dataset.descripcion;
            document.getElementById('precio').value = this.dataset.precio;
            document.getElementById('stock').value = this.dataset.stock;
            document.getElementById('categoria_id').value = this.dataset.categoria;
    
            document.getElementById('accion').value = 'actualizar';
            document.getElementById('btn-guardar').textContent = 'Actualizar Producto';
            document.getElementById('formulario').style.display = 'block';
        });
    });
     document.querySelectorAll('.btn-eliminar').forEach(boton=>{
        boton.addEventListener('click',function(){
            if(confirm('¿Seguro que deseas eliminar este producto')){
                document.getElementById('eliminar_id').value = this.dataset.id;
                document.getElementById('accion').value ='eliminar';
                document.querySelector('form').submit();
            }
        });
    });
</script>