<?php

    include("conexion.php");

    $id = $_GET['id'];

    $solicitud = "DELETE FROM monedas WHERE id=$id";

    $resultado = mysqli_query($conexion, $solicitud);

    header("location: consulta.php");

?>