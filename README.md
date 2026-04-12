#  Laboratorio #2 – Implementación de Login en Laravel

##  Universidad Tecnológica de Panamá
Facultad de Ingeniería de Sistemas Computacionales  
Curso: Desarrollo Web VII  
Instructor: Ing. Irina Fong  

---

##  Fecha de Ejecución
11 de abril de 2026  

---

##  Objetivo del Laboratorio

Implementar un sistema de autenticación (login y registro) utilizando Laravel, aplicando el patrón Modelo-Vista-Controlador (MVC).

---

##  Introducción

Laravel es un framework de desarrollo web basado en PHP que utiliza el patrón MVC, el cual permite separar la lógica de la aplicación en diferentes componentes.

###  Estructura MVC en Laravel

- ** Modelos (Models):** Manejan la lógica de datos y conexión con la base de datos.
- ** Vistas (Views):** Representan la interfaz gráfica del usuario.
- ** Controladores (Controllers):** Gestionan la lógica de la aplicación.
- ** Rutas (Routes):** Definen las URL y conectan con los controladores.

Este laboratorio permitió comprender la estructura de Laravel y la implementación de un sistema de autenticación.

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

##  Proceso de Instalación

### 1️ Crear proyecto Laravel

```bash
Configurar archivo .env
DB_DATABASE=login_db
DB_USERNAME=root
DB_PASSWORD=
3️ Ejecutar migraciones
php artisan migrate
4️ Instalar autenticación
composer require laravel/ui
php artisan ui bootstrap --auth
npm install
npm run dev
5️ Levantar servidor
php artisan serve

Abrir en navegador:
http://127.0.0.1:8000/

 Base de Datos
Motor: MySQL
Base de datos: login_db
 Migraciones
php artisan migrate
 Configuración adicional
php artisan config:clear
php artisan config:cache
php artisan key:generate
 Backup de Base de Datos

Se realizó un respaldo de la base de datos utilizando phpMyAdmin, exportando en formato .sql.

El archivo de respaldo se encuentra dentro del repositorio.

 Resultados

Se logró implementar:

Registro de usuarios
Inicio de sesión
Sistema de autenticación funcional

Este laboratorio ha sido desarrollado por el estudiante de la Universidad
Tecnológica de Panamá:
Nombre: Ruben Dominguez 8-988-2361
Correo: ruben.dominguez1@utp.ac.pa
Curso: Desarrollo de software VII

laravel new login-app
