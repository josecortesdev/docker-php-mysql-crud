<?php

include("conexion.php");

$solicitud = "CREATE TABLE monedas (ID int NOT NULL AUTO_INCREMENT, Nombre varchar (15), Precio int, PRIMARY KEY(ID)"; 

$resultado = mysqli_query($conexion, $solicitud);

echo('hecho');


?>