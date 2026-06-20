<?php $categorias = $categorias ?? [];?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
    <h1>Categorias</h1>
    
    <button  type="button" onclick="mostrarFormulario()" >Nueva Categoria</button>

    <div id="formulario" style="display:none;">
        <form method="POST">
            <div>
                <label for="">Nombre</label>
                <br>
                <input type="text"  name="nombre"  id="nombre" required> 
                <br>
                <div>
                    <label for="">Descripcion</label>
                    <br>
                    <textarea name="descripcion" id="descripcion"></textarea>
                </div>
                <br>
                <button type="submit" id="btn-guardar">Guardar Categoria</button>

                <input type="hidden" name="id" id="categoria_id"> 
                <input
                 type ="hidden"
                 name ="accion"
                 id="accion"
                 value="crear"
                >
                <input 
                 type="hidden"
                 name="eliminar_id"
                 id="eliminar_id">
                 
            </div>

        </form>
    </div>


    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        
        <tbody>
            <?php foreach ($categorias as $categoria): ?>
                <tr>
                    <td><?= $categoria['id'] ?></td>
                    <td><?= $categoria['nombre'] ?></td>
                    <td><?= $categoria['descripcion'] ?></td>
                    <td>
                       <button 
                         type="button"
                         class="btn-editar"
                         data-id=<?= $categoria['id'] ?>
                         data-nombre=<?= $categoria['nombre'] ?>
                         data-descripcion=<?= $categoria['descripcion'] ?>
                         >Editar
                      </button>
                       <button 
                         type="button"
                         class="btn-eliminar"
                         data-id="<?= $categoria['id'] ?>"
                         >Eliminar
                       </button>
                    </td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
<script>
    function mostrarFormulario(){
        document.getElementById('formulario').style.display = 'block';
    }
    document.querySelectorAll('.btn-editar').forEach(boton=>{
        boton.addEventListener('click',function(){

        document.getElementById('categoria_id').value=this.dataset.id;
        document.getElementById('nombre').value = this.dataset.nombre;
        document.getElementById('descripcion').value = this.dataset.descripcion;
        document.getElementById('accion').value ='actualizar';
        document.getElementById('btn-guardar').textContent ='Actualizar Categoria';
        document.getElementById('formulario').style.display = 'block';
     });
    });
    document.querySelectorAll('.btn-eliminar').forEach(boton=>{
        boton.addEventListener('click',function(){
            if(confirm('¿Seguro que deseas eliminar esta categoria')){
                document.getElementById('eliminar_id').value = this.dataset.id;
                document.getElementById('accion').value ='eliminar';
                document.querySelector('form').submit();
            }
        });
    });
</script>