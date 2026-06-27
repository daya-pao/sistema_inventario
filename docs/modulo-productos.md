## MÓDULO DE PRODUCTOS
## Objetivo
 Permitir la gestion de productos para tener una buena 
 organizacion por categoria.

## Funcionalidades
 -Crear producto
 -Listar producto
 -Editar producto
 -Eliminar producto
 
## campos 
 ## productos
  -id
  -nombre
  -descripcion
  -presion
  -stock
  -categoria_id
  -created_at

## Flujo
  1.El usuario accede al módulo de productos.
  2.Puede registrar un nuevo producto.
  3.uede visualizar los productos existentes.
  4.Puede modificar un producto.
  5.Puede eliminar un producto.


## MODELO PRODUCTO
 Responsabilidad: 
  Gestionar las operaciones relacionadas con los productos.
 Metodos:
  ## listar()
   Obtener todos los productos registrados en la base 
   de datos mostrando la información de la categoría asociada.

  Retorno:
    Array asociativo con los productos encontrados.

  ### crear()
  Responsabilidad:
   Registrar un nuevo producto en la base de datos.
  Parámetros:
    -nombre
    -descripcion
    -precio
    -stock
    -categoria_id
   Retorno:
    -true si la inserción fue exitosa.
    -false en caso de error.
  ### buscarPorId()
  Responsabilidad:
   Buscar un producto por su identificador.

   Parámetros:

   -id

  Retorno:
  -Datos del producto encontrado.
  -false si no existe.

  ### actualizar()
  Responsabilidad:
   Modificar un producto existente.
  Parámetros:
   - id
   -nombre
   -descripcion
   -precio
   -stock
   -categoria_id
  Retorno:
   -true si la actualización fue exitosa.
   -false en caso de error.

  ### Eliminar()
  Responsabilidad
    Eliminar un producto por su id.
  Parámentros:
    -id
  Retorno:
   -true si se aliminó correctamente.
   -false si ocurrió un error.


## ARCHIVO
  -app/controllers/productoController.php
  -app/models/producto.php
  -app/views/productos/index.php
  -docs/modulo-productos.md
  -public/productos.php

