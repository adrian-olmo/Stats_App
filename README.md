# Stats App
## Contenido: 
- [Introduccion](#Introduccion)
- [Tecnologias](#Tecnologias)
- [BackEnd](#BackEnd)
  - [Base de Datos](#Base-de-Datos)
  - [Estructura de Carpetas Laravel](#Estructura-de-Carpetas-Laravel)
  - [Autenticacion y Autorizacion](#Autenticación-y-Autorización)
  - [Endpoints](#Endpoints)
- [FrontEnd](#FrontEnd)
  - [Estructura de Carpetas Laravel](#Estructura-de-Carpetas-Laravel)
  - [Web](#Web)

## Introduccion
:memo: Introducción

Una Aplicación que permite ver toda la información de una Selección de Futbol, ver sus plantillas, y los partidos que disputará proximamente, con el objetivo de no navegar por diferentes sitios webs para poder obtener toda esta información
#

## Tecnologias
:hammer_and_wrench:  Tecnologias

Para desarrollar toda esta aplicación se han usado diferentes tecnologías tanto para front, para back e incluso para poder desplegarla. Además de trabajar con docker para evitar los problemas en diferentes entornos a la hora de desarrollar y desplegar.

De cara al backend los datos se han gestionado con una base de datos relacional con **SQL** este servicio, junto a **PhpMyAdmin** se han dockerizado para evitar problemas al trabajar en diferentes sistemas operativos. Siguiendo con el tema datos, para trabajar y manipular estos datos, se ha desplegado un backend con **PHP** + **Laravel** que ha permitido elaborar diferentes funcionalidades para crear, leer, actualizar y borrar cualquier dato que podamos encontrar en nuestra BBDD.

Para visualizar todos estos datos, como interactuan las funciones con los registros, se elabora un frontend con **Reactjs** + **Node** ademas de diseñar las vistas con **HTML**, **CSS**, y **SCSS** separando cada funcionalidad en componentes diferentes.

Y por último para que todo esto estuviera accesible a todo el mundo, se puso en marcha el despliegue, separando el backend en **Heroku** y el frontend en **AWS**
#

## BackEnd
:back: Backend

Como bien se menciona anteriormente, para esta aplicación es necesario guardar, manejar e interactuar con los datos, para lograr esto es necesario almacenarlos en una base de datos y tener una serie de funciones para interacturar con estos datos. De cara a seguridad, restricciones y velocidad de lectura de datos, se eligió trabajar con una base de datos **SQL**, ya que estas tienen mayor control sobre el tipo de datos que maneja. Y para utilizar funciones que m

### Base de Datos
:closed_book: Base de datos

El planteamiento de la base de datos fue el siguiente: 
![Database](https://user-images.githubusercontent.com/47026705/121591323-a24f8880-ca39-11eb-9d13-76dd352cee44.png)
#
### Estructura de Carpetas Laravel
:open_file_folder: Estructura de carpetas

                ├───app
                    ├───Http
                        ├───Controllers
                        ├───Middleware
                    ├───Models
                    ├───Provider
                ├───config
                ├───database
                    ├───factories
                    ├───migrations
                    ├───seeders
                ├───routes
#

### Autenticación y Autorización 
:closed_lock_with_key: Autenticación y Autorización 

Los nuevos usuarios deberán registrarse para acceder a los puntos dentro de la aplicación.
Los usuarios registrados pueden iniciar sesión guarda la información en un token que permite al usuario acceder a rutas, servicios y recursos que requieren esta llave.

Esta manera de autenticación almacena de manera cifrada el email, la password y otra información del usuario. Por defecto todos los nuevos usuarios se dan de alta con un rol
'basic', solo el usuario con rol 'admin' puede accedere a rutas y servicios especificos.

A su vez se podrán banear usuarios, los cuales solo tienen acceso al login y al logout
#

### Endpoints
:round_pushpin: Endpoints

Para acceder a las diferentes funcionalidades se provee al backend con una serie de rutas o endpoints para probar que las funcionalidades diseñadas funcionan adecuadamente.
[Documentacion Oficial](https://lively-escape-100464.postman.co/workspace/My-Workspace~6f4dec94-5271-47cd-8bb5-f876a8ab6be4/documentation/14138566-11763189-2387-4d13-a172-ca63c7fcadaa)
#
#

### FrontEnd
### Estructura de Carpetas

#

### Web
[Visita la pagina web](https://lively-escape-100464.postman.co/workspace/My-Workspace~6f4dec94-5271-47cd-8bb5-f876a8ab6be4/documentation/14138566-11763189-2387-4d13-a172-ca63c7fcadaa)
#
#
