<?php
// connect to the database
// mysqli_connect(host, user, pass, database);
$conexion = mysqli_connect('localhost', 'root', '', 'exp');

$conexion = mysqli_connect("localhost","root",'', "exp") or die('No se pudo conectar al servidor');


?>

