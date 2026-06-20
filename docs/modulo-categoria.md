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

  ### crear()
  Responsabilidad:
   Registrar una nueva categoría en la base de datos.
  Parámetros:
   - nombre
   - descripcion
   
  Retorno:
   - true si la inserción fue exitosa.
   - false en caso de error.

  ### buscarPorId()
  Responsabilidad:
   Buscar una categoria por su identificador.
  parámetros:
   id
  Retorno:
   -Datos de la categoría encontrada.
   -false si no existe.

  ### actualizar()
  Responsabildad:
   Modificar una categoría existente.
  parámetros:
   -id
   -nombre
   -descripcion
  Retorno:
   -true si la actualización fue exitosa.
   -False en casa de error.

  ### Eliminar()
  Responsabilidad
    Eliminar una categoria por su id.
  Parámentros:
    -id
  Retorno:
   -true si se aliminó correctamente.
   -false si ocurrió un error.


## ARCHIVO
  -app/controllers/categoriaController.php
  -app/models/categria.php
  -app/views/categorias/index.php


