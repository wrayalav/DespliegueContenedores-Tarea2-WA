# Curso: Despliegue de aplicaciones con Docker<br/>CEC-EPN<br/><br/>Tarea 2:  Despliegue de un contenedor apache-php utilizando el archivo docker-compose.yml

![Servidor de aplicaciones][appsrv-shield]
![lenguaje de programación][lng-shield]
![Servidor de contenedores][cont-shield]

## Integrantes Grupo 3

- [Glenda Pallo](https://github.com/glendypallo/DespliegueContenedores-Tarea2-GP)
- [Patricia Jaramillo](https://github.com/PatyJaramillo/DespliegueContenedores-Tarea2-PJ)
- [William Ayala](https://github.com/wrayalav/DespliegueContenedores-Tarea2-WA)
- [Guillermo Cifuentes](https://github.com/guillogps/DespliegueContenedores-Tarea2-GC)
- [Ruperto Cisneros](https://github.com/srcisnerosv-star/DespliegueContenedores-Tarea2-RC)

<br/>

## Introducción

La configuración presentada, compuesta por un Dockerfile y un docker-compose.yml, define un entorno estandarizado para aplicaciones en PHP 7.4 con Apache. El Dockerfile utiliza una estrategia multi-stage para optimizar la imagen, incorporando herramientas como Git, un usuario no-root (vscode) y utilitarios de Docker (CLI, Buildx, Compose). Por su parte, docker-compose permite orquestar servicios, gestionar volúmenes y redes, facilitando la portabilidad y la reproducibilidad del entorno en diferentes fases de desarrollo y despliegue.

<br/>

## Construido con

- Docker
- Docker Compose
- Apache
- PHP [7.4](https://hub.docker.com/_/php)

<br/>

## Archivos

La tarea contiene los siguientes archivos:

```sh
$ tree -a
  .
  ├── app
  │   ├── Dockerfile
  │   └── index.php
  └── docker-compose.yml
```

| Archivo | Descripción |
| ---- | ---- |
| [Dockerfile](app/Dockerfile) | Archivo que contiene las instrucciones para crear una imagen en Docker. |
| [index.php](app/index.php) | Página de inicio personalizada. |
| [docker-compose.yml](docker-compose.yml) | Archivo que define la orquestación. |

<br/>

## Procedimiento

1. Se revisa el archivo Dockerfile para revisar la image que se descargará del registry de docker hub

   ```
   $ cat Dockerfile
   ```

   <img width="2048" height="1152" alt="image" src="https://github.com/user-attachments/assets/7d42ef87-8c7c-4a88-a505-015830a58b4a" />

2. Se revisa la orquestación configurada en el archivo docker-compose.yml

   ```
   $ cat docker-compose.yml
   ```

   <img width="2048" height="1152" alt="image" src="https://github.com/user-attachments/assets/e3e27d21-94d8-41be-aafc-22204de94f8e" />

3. Se despliega el contenedor

   ```
   $ docker compose up -d
   ```

   <img width="2048" height="1152" alt="image" src="https://github.com/user-attachments/assets/fc29f4b3-aea5-4884-a98f-d0de0bc78e63" />

4. Se comprueba que se haya levantado el contenedor

   ```
   $ docker compose ps
   ```

   <img width="2048" height="1152" alt="image" src="https://github.com/user-attachments/assets/eab5d8c7-2709-448d-930f-4f3c92c3dd22" />

5. Se verifica que se cargue la página de inicio `index.php`

   <img width="2048" height="1152" alt="image" src="https://github.com/user-attachments/assets/fe62f759-f798-402f-817b-8a3372fc4b03" />

   Como se puiede observar no se despliega la página de inicio debido a que se está presentado un error.

6. Se comprueban los persmisos de la carpeta `app`

   ```
   $ ls -l
   ```

   <img width="2048" height="1152" alt="image" src="https://github.com/user-attachments/assets/a170303b-7ede-4d5d-82d9-bf57caf3b9ac" />

   Como se observa solo existen permisos para el dueño de la carpeta.

7. Se procede a actualizar los permisos a la carpeta `app`

   ```
   $ chmod 755 app/
   $ ls -ls
   ```

   <img width="2048" height="1152" alt="image" src="https://github.com/user-attachments/assets/ad3c2db5-fdbd-4bfc-9bf9-5274c447bfa7" />

8. Se verifica nuevamente que se cargue la página de inicio `index.php`

   <img width="2048" height="1152" alt="image" src="https://github.com/user-attachments/assets/95a26b6c-57f5-474f-8078-efb4758fb236" />

<br/>

## Conclusiones

- El multi-stage build reduce el tamaño de la imagen y mejora la seguridad al incluir solo dependencias necesarias.

- La creación de un usuario no-root fortalece las prácticas de seguridad y desarrollo.

- El docker-compose simplifica la gestión de entornos multi-servicio, haciendo más ágil la orquestación y despliegue.

- En conjunto, ambos archivos proporcionan un entorno portable, reproducible y escalable, alineado con buenas prácticas de DevOps.

<!-- MARKDOWN LINKS & IMAGES -->
[appsrv-shield]: https://img.shields.io/badge/APP%20SRV-APACHE-blue?style=for-the-badge&logo=apache&logoColor=red
[lng-shield]: https://img.shields.io/badge/APP%20SRV-PHP-9cf?style=for-the-badge&logo=php&logoColor=red
[cont-shield]: https://img.shields.io/badge/CONTAINER-DOCKER-red?style=for-the-badge&logo=docker
