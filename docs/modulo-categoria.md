## MÓDULO DE CATEGORIA
## Objetivo
 Permitir la gestión de categorías para organizar los 
 productos del sistema de inventario.

## Funcionalidades
 -Crear categoria
 -Listar categoria
 -Editar categoria
 -Eliminar categoria

 ## campos 
 ## categorias
  -id
  -nombre
  -descripcion
  -created_at

## Flujo
 1.El usuario accede al módulo de categorías.
 2.Puede registrar una nueva categoria
 3.puede visualizar las categorias existentes
 4.Puede modificar una categoria
 5.Puede eliminar una categoria


## MODELO CATEGORIA
 Responsabilidad:
  Gestionar las operaciones relacionadas con las categorías.
 Metodos:
  ## listar()
   Obtiene todas las categorías registradas en la base de
   datos ordenadas por identificador descendente.

   Retorno:
    array asociativo con las categorías encontradas.




## ARCHIVO
  -app/controllers/categoriaController.php
  -app/models/categria.php
  -app/views/


