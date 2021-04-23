<?php

    include("conexion.php");

    $id = $_GET['id'];

    $solicitud = "SELECT * FROM monedas WHERE id=$id"; //solo el de este id

    $resultado = mysqli_query($conexion, $solicitud);

?>

<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Consulta</title>

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6' crossorigin='anonymous'>

    
    <style>
    html{ height: 100%;}
    body{
        
        background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
    }
        @keyframes gradient {
            0% {
              background-position: 0% 50%;
            }
            50% {
              background-position: 100% 50%;
            }
            100% {
              background-position: 0% 50%;
            }
        }
    </style>

</head>
<body class='h-100'>

<div class='row col-12 h-100'>  

<div class='col-lg-4 bg-white border  rounded-3 shadow p-5  mx-auto my-auto'>

<div class="">


<!-- ABRIMOS UN FORMULARIO -->
<form method="POST" action="ActualizarRegistro.php"> <!-- Lo enviamos a un nuevo php -->

<?php
while($fila = mysqli_fetch_array($resultado)){ // RECORREMOS EL ARRAY DEL RESULTADO

// como la sentencia sql, solo indica el campo de ese id específico
// pondrá estos campos solo una vez
// $fila['Nombre'] será el nombre del id indicado en la sentencia sql
    echo "Nombre: <input class='mt-2 form-control' type='text'; name='nombre' value=' " . $fila['Nombre'] . " '> <br> ";
    echo "Precio: <input class='mt-2 form-control' type='text'; name='precio' value=' " . $fila['Precio'] . " '> <br> ";
   
    echo "<input type='hidden'; name='id' value=' " . $id . " '> <br> ";
}
?>
<input class="btn btn-lg btn-danger mx-auto" type="submit" name="ENVIAR" value="CAMBIAR">
</form>

</div>

    </div>
    </div>
    </body>
    </html>