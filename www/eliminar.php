<?php

    include("conexion.php");

    $id = $_GET['id'];

    $solicitud = "DELETE FROM productos WHERE id=$id";

    $resultado = mysqli_query($conexion, $solicitud);

    header("location: index.php");

?>