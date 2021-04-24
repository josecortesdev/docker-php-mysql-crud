<?php
// <link rel='stylesheet' type='text/css'  href='consulta.css' />
// background-color:  #faf9fa;
echo " <!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Inicio</title>

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

";



//CONEXION A LA BBDD  
    include("conexion.php");

// CONSULTA
    $solicitud = "SELECT * FROM productos ORDER BY Precio ASC";
    $resultado = mysqli_query($conexion, $solicitud);


//VACIADO DE DATOS
echo " <table class='table'> 
<thead>
<tr>
<th scope='col'>Nombre</th>  
<th scope='col'>Precio</th>
<th scope='col'>Modificar</th>
<th scope='col'>Eliminar</th>
</tr> 
</thead><tbody>";

    while($fila = mysqli_fetch_array($resultado)){
        echo "<tr>"; 
        echo "<td>". $fila['Nombre'] . "</td>" ;
        echo "<td>". $fila['Precio'] . "</td>" ;
        echo "<td> <a href='ActualizarFormulario.php?id=". $fila['id'] ." '> actualizar </td>" ;
        echo "<td> <a href='eliminar.php?id=". $fila['id'] ." '> eliminar </td>" ;
        echo "</tr>";
    }
echo "</tbody></table>

<a type='button' class='btn btn-primary btn-lg mt-4' href='Crear.php'>Añadir vacuna</a>

</div>
</div>

</body>
</html>


";
?>

