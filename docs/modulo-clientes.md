## MÓDULO DE CLIENTE
## Objetivo
 Permitir la gestión de clientes para organizar los 
 clientes del sistema de inventario.

## Funcionalidades
 -Crear cliente
 -Listar cliente
 -Editar cliente
 -Eliminar cliente

 ## campos 
 ## cLientes
  -id
  -nombre
  -documento
  -telefono
  -correo
  -direccion
  -created_at

## Flujo
 1.El usuario accede al módulo de clientes.
 2.Puede registrar un nuevo cliente.
 3.puede visualizar los clientes existentes.
 4.Puede modificar un cliente.
 5.Puede eliminar un cliente.


## MODELO Cliente
 Responsabilidad:
  Gestionar las operaciones relacionadas con los clientes.

 Metodos:
  ## listar()
   Obtener todos los clientes registrados en la base de
   datos ordenados por identificador descendente.

   Retorno:
    array asociativo con los clientes encontrados.

  ### crear()
  Responsabilidad:
   Registrar un nuevo cliente en la base de datos.
  Parámetros:
   - nombre
   - dodumento
   -telefono
   -correo
   -direccion
   
  Retorno:
   - true si la inserción fue exitosa.
   - false en caso de error.

  ### buscarPorId()
  Responsabilidad:
   Buscar un cliente  por su identificador.
  parámetros:
   id
  Retorno:
   -Datos del cliente  encontrado.
   -false si no existe.

  ### actualizar()
  Responsabildad:
   Modificar un cliente existente.
  parámetros:
   -id
   -nombre
   -documento
   -telefono
   -correo
   -direccion
  Retorno:
   -true si la actualización fue exitosa.
   -False en casa de error.

  ### Eliminar()
  Responsabilidad
    Eliminar un cliente por su id.
  Parámentros:
    -id
  Retorno:
   -true si se aliminó correctamente.
   -false si ocurrió un error.


## ARCHIVO
  -app/controllers/ClienteController.php
  -app/models/cliente.php
  -app/views/clientes/index.php
  -docs/modulo-clientes.md
  -public/clientes.php

