<?php $clientes = $clientes ?? [];?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1>Clientes</h1>
    <button type="button" onclick="mostrarFormulario()">Nuevo Cliente</button>

    <div id="formulario" style="display:none;"> 
        <form  method="POST">
          

            <label>Nombre</label>
            <br>
            <input type="text" name="nombre" id="nombre">
            <br>
            <label>Documento</label>
            <br>
            <input type="text" name="documento" id="documento" required>
            <br>
            <label>Telefono</label>
            <br>
            <input type="text" name="telefono" id="telefono" required>
            <br>
            <label>correo</label>
            <br>
            <input  type="email" name="correo" id="correo"required>
            <br>
            <label>direccion</label>
            <br>
            <input  type="text" name="direccion" id="direccion"required>
            <br>
            <button type="submit" id="btn-guardar">Guardar Producto</button>
                
            <input type="hidden" name="id" id="cliente_id">

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
            <th>Documento</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Direccion</th>
             <th>Acciones</th>
        </tr>
         <?php foreach($clientes as $cliente): ?>
        <tr>
            <td><?= $cliente['id'] ?></td>
            <td><?= $cliente['nombre'] ?></td>
            <td><?= $cliente['documento'] ?></td>
            <td><?= $cliente['telefono'] ?></td>
            <td><?= $cliente['correo'] ?></td>
            <td><?= $cliente['direccion'] ?></td>
            <td> 
                <button 
                     type="button"
                     class="btn-editar"
                     data-id=<?= $cliente['id'] ?>
                     data-nombre=<?= $cliente['nombre'] ?>
                     data-documento=<?= $cliente['documento'] ?>
                     data-telefono=<?= $cliente['telefono'] ?>
                     data-correo=<?= $cliente['correo'] ?>
                     data-direccion=<?= $cliente['direccion'] ?>
                     >Editar
                </button>
                <button 
                    type="button"
                    class="btn-eliminar"
                    data-id="<?= $cliente['id'] ?>"
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
            document.getElementById('cliente_id').value = this.dataset.id;
            document.getElementById('nombre').value = this.dataset.nombre;
            document.getElementById('documento').value = this.dataset.documento;
            document.getElementById('telefono').value = this.dataset.telefono;
            document.getElementById('correo').value = this.dataset.correo;
            document.getElementById('direccion').value = this.dataset.direccion;
    
            document.getElementById('accion').value = 'actualizar';
            document.getElementById('btn-guardar').textContent = 'Actualizar cliente';
            document.getElementById('formulario').style.display = 'block';
        });
    });
     document.querySelectorAll('.btn-eliminar').forEach(boton=>{
        boton.addEventListener('click',function(){
            if(confirm('¿Seguro que deseas eliminar este cliente')){
                document.getElementById('eliminar_id').value = this.dataset.id;
                document.getElementById('accion').value ='eliminar';
                document.querySelector('form').submit();
            }
        });
    });
</script>