# Consultorio

## Introducción 🍀


> Un colectivo de desarrollo de software quiere crear una aplicación web para gestionar sus eventos online como talleres, masterclass o webinars.
Los usuarios podrán ver la descripción de un evento, apuntarse y desapuntarse. Podrán ver la lista de los eventos a los que se han apuntado. El administrador debe tener las herramientas para la gestión (CRUD) de los eventos.

> El proyecto se debe realizar en equipos Scrum en 3 sprints de 1 semana.
>

### Objetivos de la práctica🔩:

- Cómo funciona en el framework la creación de Modelos, Vistas y Controladores.
- Que és y las bondades de: php artisan (CLI)
- Implementaremos un router y el uso de los métodos Http.
- Veremos como usar cositas relacionadas con la base de datos SQL (Migraciones, Factories, Seeders, el ORM eloquent y el diseño de DB)
- Cómo crear un CRUD básico en Laravel
- Cómo usar la autenticación y autorización mediante (Auth y middleware)
- Veremos como funciona el sistema de plantillas en el frontend con Blade (componentes anónimos, layouts y componentes Liveware)
- Intentaremos empezar con el testing con phpUnit

## Requisitos Funcionales🚗
    
- En portada la aplicación tendrá un slider con las masterclasses destacadas. éstas serán seleccionables por el administrador.
- En portada habrá una lista paginada con todos los eventos ordenados del más cercano al más lejano en el tiempo.
- Los eventos incluirán como mínimo: título, fecha/hora, número máximo de participantes, descripción y una imagen.
- Los eventos pasados se deben mantener en la lista pero identificables como no disponibles.
- Los usuarios deberán registrarse para apuntarse a un evento. Una vez apuntados no podran volver a hacerlo.
- Al apuntarse a un evento recibirán un email (empresarial - html ) con el link (zoom, meets, etc..) en donde se va a realizar, así como recordando el título del evento, la hora y el día.
- Los usuarios podrán ver en una página la lista de los eventos a los que están registrados.
- El administrador podrá hacer CRUD de los eventos.
- Cuando un evento esté lleno (máximo número de participantes) nadie podrá registrarse.

Extra:

- Para que apps de terceros usen nuestros datos abriremos una API con un endpoint '*/api/events*' donde enviaremos una lista paginada de todos los eventos

##Requisitos no funcionales:

- La web deberá estar en *deploy* aunque esté en desarrollo.
- Todos los requisitos y casos de usuario deberán estar testeados (tests de aceptación)
- Se deberá usar Laravel.
- El envío de el email se deberá hacer usando un sistema de colas.
- Para el frontend se deben usar componentes de blade y/o Liveware o Js.


## Roles🎯
* Scrum master: Sergi Fuentes
* Product owner: Lucas Rodríguez
* Developers team: Lucas Rodríguez, Mayu Ruiz, Melisa Manoni, Carmen Rubio, Sergi Fuentes y Rita Solà. 


## Repositorio de GitHub 🚀
Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu ordenador local para propósitos de desarrollo y pruebas:
https://github.com/ItCrowdZombie/techEvents
Abre la terminal y ejecuta: git clone para descargar el proyecto.



## Construido con 🛠️
* Frontend: HTML, Bootstrap.
* Backend: PHP
* Libreria: Carbon
* Bases de datos: MySQL
* Xampp / Mamp y Composer
* Mailtrap


## Gratitud 🎁
* Comenta a otros sobre este proyecto 📢 .
* Apoya mis proyectos 🤓 .
* ⌨️ con ❤️ por Lucas Rodríguez, Mayu Ruiz, Melisa Manoni, Sergi Fuentes, Carmen Rubio y Rita Solà. 
