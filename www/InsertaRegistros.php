<?php

//conexion
include("conexion.php");

//captar las variables
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];

//meterlas en un registro, en la tabla
$solicitud = "INSERT INTO monedas(Nombre, Precio) VALUES('$nombre', '$precio' )";

//enviar la sentencia sql
$resultado = mysqli_query($conexion, $solicitud);

// que reaparezca la misma página al terminar
header("location: Consulta.php");

?>