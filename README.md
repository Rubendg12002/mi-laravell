Sistema de Autenticación en Laravel (Login y Registro)

Facultad de Ingeniería de Sistemas Computacionales  
Curso: Desarrollo Web VII  
Instructor: Ing. Irina Fong  

##  Universidad Tecnológica de Panamá
Facultad de Ingeniería de Sistemas Computacionales  
Curso: Desarrollo Web VII  
Instructor: Ing. Irina Fong  

---

##  Fecha de Ejecución
11 de abril de 2026  

---

 Objetivo del Laboratorio
Implementar un sistema de autenticación (registro e inicio de sesión) utilizando Laravel, aplicando el patrón de arquitectura Modelo-Vista-Controlador (MVC), con el fin de comprender la estructura del framework y su funcionamiento en aplicaciones web modernas.

---

##  Introducción

Laravel es un framework de desarrollo web basado en PHP que facilita la creación de aplicaciones robustas y escalables. Utiliza el patrón MVC (Modelo-Vista-Controlador), lo que permite separar responsabilidades dentro del sistema.

En este laboratorio se realizó un primer acercamiento a Laravel, explorando su estructura de carpetas, configuración inicial, conexión a base de datos y la implementación de un sistema de autenticación.

Este proceso permitió comprender cómo Laravel organiza el código y automatiza tareas comunes como el login de usuarios.

###  Estructura MVC en Laravel

- ** Modelos (Models):** Manejan la lógica de datos y conexión con la base de datos.
- ** Vistas (Views):** Representan la interfaz gráfica del usuario.
- ** Controladores (Controllers):** Gestionan la lógica de la aplicación.
- ** Rutas (Routes):** Definen las URL y conectan con los controladores.

Este laboratorio permitió comprender la estructura de Laravel y la implementación de un sistema de autenticación.

.Arquitectura MVC en Laravel
Modelos (Models):
Representan la estructura de datos y la interacción con la base de datos.
Vistas (Views):
Encargadas de la interfaz gráfica del usuario (HTML, Blade).
Controladores (Controllers):
Gestionan la lógica de la aplicación y conectan modelos con vistas.
Rutas (Routes):
Definen las URL del sistema y direccionan las solicitudes a los controladores.
---

##  Requisitos Previos

###  Ecosistema de desarrollo

-  PHP 8.0 o superior  
-  Composer  
-  Laravel  
-  XAMPP  
-  Apache  
-  MySQL  
-  Visual Studio Code  
-  Node.js / NPM  

###  Sistema Operativo

- Windows 10 / 11  

---

Proceso de Instalación
1️ Crear el proyecto Laravel
laravel new login-app
2️ Configuración del archivo .env
DB_DATABASE=login_db
DB_USERNAME=root
DB_PASSWORD=

Este archivo permite configurar variables de entorno como la conexión a la base de datos.

3️ Ejecutar migraciones
php artisan migrate

 ¿Qué hacen las migraciones?

Crean tablas en la base de datos automáticamente
Laravel registra cuáles ya fueron ejecutadas
Permiten modificar la base de datos de forma controlada
4️ Generar clave de la aplicación
php artisan key:generate

 Esta clave se utiliza para:

Encriptación de datos
Manejo de sesiones
Seguridad de la aplicación
5️ Limpiar y cachear configuración
php artisan config:clear
php artisan config:cache

Esto asegura que Laravel lea correctamente los cambios realizados en .env.

6️Instalar autenticación
composer require laravel/ui
php artisan ui bootstrap --auth

Esto genera automáticamente:

Login
Registro
Recuperación de contraseña

7️ Instalar dependencias de frontend
npm install
npm run dev

 Esto permite:

Compilar CSS y JavaScript
Usar herramientas modernas como Vite
8️ Ejecutar el servidor
php artisan serve

Abrir en navegador:

http://127.0.0.1:8000/
 Base de Datos
Motor: MySQL
Nombre: login_db

Las tablas fueron creadas automáticamente mediante migraciones.

 Gestión de Dependencias
Composer
composer install: instala dependencias existentes
composer update: actualiza dependencias
NPM
npm install: instala paquetes de frontend
npm run dev: compila en modo desarrollo
 Errores Comunes y Soluciones
 Error de clave no definida
php artisan key:generate
 Cambios en .env no se reflejan
php artisan config:clear
 Error de migraciones
Verificar que MySQL esté activo
Revisar credenciales en .env
 Error 500
Revisar logs en storage/logs
Ejecutar:
composer install
 Backup de Base de Datos

Se realizó un respaldo utilizando phpMyAdmin, exportando la base de datos en formato .sql.

El archivo se encuentra dentro del repositorio del proyecto.

 Resultados Obtenidos

Se logró implementar correctamente:

Registro de usuarios
Inicio de sesión
Sistema de autenticación funcional
Integración con base de datos
Uso del patrón MVC en Laravel

 Conclusión

Este laboratorio permitió comprender la estructura y funcionamiento del framework Laravel, así como la importancia del patrón MVC en el desarrollo de aplicaciones web.

Además, se adquirieron conocimientos prácticos sobre:

Configuración de entornos
Manejo de bases de datos
Automatización de procesos mediante Artisan
Implementación de autenticación

Este laboratorio ha sido desarrollado por el estudiante de la Universidad
Tecnológica de Panamá:
Nombre: Ruben Dominguez 8-988-2361
Correo: ruben.dominguez1@utp.ac.pa
Curso: Desarrollo de software VII

laravel new login-app
