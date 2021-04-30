# Docker: CRUD con PHP y MySQL 
Recurso con el que puedes instalar rápidamente un ambiente de desarrollo local para comenzar un proyecto en el que haga falta un CRUD con PHP y MySQL utilizando Docker.

# Versión 2
Puedes ver una versión más actualizada de esta aplicación en la que he añadido un Login. Se crea un hash de las contraseñas antes de almacenarlas en la base de datos.
https://github.com/josecortesdev/docker-php-mysql-crud-login

## Requerimientos
- [Docker Desktop](https://www.docker.com/products/docker-desktop)

## Instrucciones para instalar el ambiente de desarrollo
En línea de comandos:
```
docker-compose up -d
```

## Comandos
Una vez que lo instales, puedes utilizar los siguientes comandos:
```
docker-compose start   #Iniciar el ambiente de desarrollo
docker-compose stop    #Detener el ambiente de desarrollo
docker-compose down    #Detener y eliminar el ambiente de desarrollo
```
## Estructura de archivos
* ```/docker/``` contiene los archivos de configuración de Docker.
* ```/www/``` contiene los archivos PHP del proyecto.
* ```init.sql``` es para modificar la configuración inicial de la base de datos.

## Credenciales para la conexión
| Usuario | Clave | Base de datos |
| :-------------: | :-------------: | :-------------: |
| dbuser  | dbpass  | dbname  |
