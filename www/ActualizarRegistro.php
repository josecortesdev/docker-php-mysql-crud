<?php

//captar las variables
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$id = $_POST['id'];

include("conexion.php");

//solicitud
$solicitud = "UPDATE monedas SET Nombre='$nombre', Precio='$precio' WHERE id=$id";

//enviar solicitud
$resultado = mysqli_query($conexion, $solicitud);

//volver a dos
header("location: Consulta.php");

?>