# CRUD USUARIOS PHP

## Descripción
CRUD USUARIOS PHP es una aplicación web desarrollada en PHP que permite realizar operaciones de Crear, Leer, Actualizar y Eliminar (CRUD por sus siglas en inglés) usuarios en una base de datos MySQL. Este proyecto está diseñado para ser simple, intuitivo y funcional, ofreciendo una interfaz de usuario amigable para gestionar la información de usuarios en la base de datos `users_crud_php`.

## Características
- **Crear Usuarios:** Permite añadir nuevos usuarios a la base de datos con información como nombre, correo electrónico, y más.
- **Leer Usuarios:** Muestra una lista de todos los usuarios registrados en la base de datos con opción a buscar por diferentes criterios.
- **Actualizar Usuarios:** Ofrece la posibilidad de modificar la información de los usuarios existentes.
- **Eliminar Usuarios:** Permite eliminar usuarios de la base de datos de manera segura.

## Requisitos Previos
Para ejecutar este proyecto, necesitarás:
- Servidor web con soporte para PHP (XAMPP, WAMP, Linux, etc.)
- MySQL Database Server
- Navegador web

## Instalación
1. **Clonar el Repositorio:**

git clone https://tu-repositorio/crud-usuarios-php.git

2. **Importar la Base de Datos:**
- Accede a tu gestor de base de datos (phpMyAdmin, MySQL Workbench, etc.)
- Crea una nueva base de datos llamada `users_crud_php`.
- Importa el archivo `users.sql` incluido en el repositorio para crear las tablas necesarias.

3. **Configuración del Proyecto:**
- Navega a la carpeta del proyecto y abre el archivo `connection.php`.
- Modifica las variables `$hostname`, `$username`, `$password`, `$database` con tus datos de conexión a la base de datos.

4. **Ejecutar la Aplicación:**
- Coloca el proyecto en el directorio de tu servidor web.
- Abre tu navegador y navega a `http://localhost/crud-usuarios-php`.

## Uso
- **Interfaz Principal:** Accede a la interfaz principal donde podrás ver, añadir, editar y eliminar usuarios.
- **Añadir Usuario:** Haz clic en el botón "Añadir Nuevo" y completa el formulario.
- **Editar/Eliminar Usuario:** En la lista de usuarios, haz clic en "Editar" o "Eliminar" según lo que desees realizar.


