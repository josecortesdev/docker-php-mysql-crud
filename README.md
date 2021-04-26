# Docker: CRUD con PHP y MySQL 
Recurso con el que puedes instalar rápidamente un ambiente de desarrollo local para comenzar un proyecto en el que haga falta un CRUD con PHP y MySQL utilizando Docker.

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
* /docker/ contiene los archivos de configuración de Docker.
* /www/ contiene los archivos PHP del proyecto.

## Credenciales para la conexión
| Usuario | Clave | Base de datos |
| :-------------: | :-------------: | :-------------: |
| dbuser  | dbpass  | dbname  |
