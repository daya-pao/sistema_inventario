## MÓDULO DE AUTENTICACION
### Objetivo del módulo
 Permitir el acceso seguro de los usuarios al sistema de inventario mediante 
 la validación de credenciales almacenadas en la base de datos.

### Pantalla de login
 La pantalla de inicio de sesión permitirá a los usuarios ingresar sus 
 credenciales para acceder al sistema .
---
  ### campos:
  -correo electrónico
  -contraseña
  -botón ingresar
 
  ### validaciones
   -los campos son obligatorios
   -el correo debe existir en el sistema
   -la contraseña debe coincidir con la registrada
---
### validación de credenciales
 El sistema verificará la información ingresada por el usuario
 consultando la tabla USUARIOS de la base de datos.
 
 ### Flujo
  -el usuario ingresa correo y contreseña
  -el sistema busca el usuario en la base de datos.
  -se verifica la contraseña
  -se las credenciales son correctas,se inicia la sesión
  -si son incorrectas se muestra un mensaje

 ### inicio de sesión
 cuando las credenciales sean válidas:
  -se crea una sesión de usuario
  -se almacena la información necesaria en variables de sesion
  -el usuario es redirigido al panel principal del sistema

 ### cierre de sesión
 El sistema permitira finaliza la sesión activa
  ### proceso
   -El usuario selecciona la opción "cerrar sesión"
   -el sistema destruye la sesión actual
   -el usuario es redirigido a la pantalla de inicio de sesión

  ### consideraciones de seguridad
    -las contraseñas se almacenarán cifradas mediante "password_hash()"
    -La validación se realizará utilizando "password_verify()"
    -las paginas protegidas requerirán una sesión activa para ser visualizadaz.

---- 
## MODELO USUARIO
 Responsabilidad:
  Gestionar las operaciones relacionadas con los usuarios
  del sistema.
 Funciones iniciales:
  -Buscar usuario por correo electronico
  -Obtener información del usurio para validación de acceso

## VISTA LOGIN
 Responsabilidad:
  Mostrarel formulario de acceso al sistema
 Campos:
  -Correo electrónico
  -Contraseña
 Acciones:
 -Enviar credenciales al controlador de auntenticacion

## CONTROLADOR DE AUTENTICACIÓN
 Responsabilidad:
  Gestionar el proceso de autenticacion de usuarios
 Funciones:
  -Recibir credenciales desde la vista
  -validar información
  -consultar usuarios mediante el modelo
  -crear sesiones
  -gestionar cierre de sesión