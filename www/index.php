<?php

$host = 'mysql'; // nombre del servicio de docker-compose .yml
$user = 'dbuser';
$password = 'dbpass';
$db = 'dbname';

$conn = new mysqli($host, $user, $password, $db);
if($conn->connect_error){
    echo 'conexión fallida' . $conn->connect_error;  
    exit;
}
echo 'Te has conectado correctamente a MYSQL.';

?>