# Stats App
## Contenido: 
- [Introduccion](#Introduccion)
- [Tecnologias](#Tecnologias)
- [BackEnd](#BackEnd)
  - [Base de Datos](#Base-de-Datos)
  - [Estructura de Carpetas Laravel](#Estructura-de-Carpetas-Laravel)
  - [Autenticacion y Autorizacion](#Autenticación-y-Autorización)
  - [Metodos](#Metodos)
  - [Endpoints](#Endpoints)
- [FrontEnd](#FrontEnd)
  - [Estructura de Carpetas Laravel](#Estructura-de-Carpetas-Laravel)
  - [Features](#Features)

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
El planteamiento de la base de datos fue el siguiente: 
![Database](https://user-images.githubusercontent.com/47026705/121591323-a24f8880-ca39-11eb-9d13-76dd352cee44.png)
#
### Estructura de Carpetas Laravel
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
