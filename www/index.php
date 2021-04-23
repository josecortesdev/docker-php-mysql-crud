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
    <form  method="POST" action="InsertaRegistros.php">

    Nombre: <br> <input class="mt-2 form-control" type="text" name="nombre"> <br>
    Precio: <br> <input class="mt-2 form-control" type="text" name="precio"> <br><br>
    
    <input class="btn btn-lg btn-danger mx-auto " type="submit" name="ENVIAR" value="CREAR"> <br>
    
    </form>
    </div>

    </div>
    </div>
    </body>
    </html>
