# Arquitetura del proyecto
## Nombre del proyecto
 Sistema de inventario
## Descripción
 Aplicación web desarrollada con PHP Y MYSQL siguiendo el patron MVC  para la gestión de inventario ,producto y categorías.
---
## Estructura de Carpetas

```text
inventario-web
|
|---app/
|    |-- controllers/
|    |-- models/
|    |-- views/
|
|--- comfig/
|--- database/
|--- docs /|
|--- public/
|     |-- css/
|     |-- js /
|     |-- index.php
|
|__README-md

```
---
## Función de as Carpetas

### app/
 Contiene la lógica principal de la aplicación.

### app/controllers/
 Gestiona las peticiones del usuario y coordina la comunicación entre modelos y vistas

### app/models/
 Contiene la lógica de negocio y las consultas de la base de datos.

## app/views/
 Contiene las interfaces que visualiza el usuario.
 
### config/
 Almacena archivos de configuración del sistema, incluyendo la conexión a la base de datos.

### database/
 Contiene scripts SQL,migraciones y documentación relacionada con la base de datos.

### dosc/
 Documentación técnica y funcional del proyecto.

### public/
 Archivos públicos accesibles desde el navegador.

### public/css/
 Hojas de estilo de la aplicación.

### public/js/
 Scripts javaScript del sistema.

### public/index.php
 Punto de entrada principal d ela aplicación.

---

## Base de datos
 Nombre:
 inventario.db

 Motor:
 MYSQL / MariaDB

---

## Tablas Creadas

### usuarios
 campos:
 -id
 -nombre
 -password
 -created_at

 Descripción:
 Almacena la información de los usuarios que acceden al sistema.

---
### categorias
 campos:
  -id
  -nombre
  -descripcion
  -created_at

  Descripción:
  ALmacena las categorías de los productos.
---

### productos
 campos:
  -id
  -nombre
  -descripcion
  -precio
  -stock
  -categoria_id
  -created_at

  Descripcíon:
  Almacena la infirmacion de los productos y su relación con las categorías.

---

## Proximos módulos
 -conexión a bases de datos
 -autenticación de usuarios
 -CRUD de categorias
 -CRUD de productos
 -control de inventarios
 -reportes


