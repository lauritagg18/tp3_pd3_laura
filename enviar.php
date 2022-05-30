<!doctype html>
<html>
<head>
	<meta charset="utf-8">
<title>Enviar</title>
</head>

<body>
<?php

//se arma el array POST
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$asunto=$_POST['asunto'];
$comentario=$_POST["comentario"];

$conexion = mysqli_connect("localhost","root","", "contactos") or die('No se pudo conectar al servidor');

$consulta = mysqli_query($conexion, "INSERT INTO contactos VALUES ('','$nombre','$email','$asunto','$comentario')") or die(mysqli_error($consulta));



?>
</body>
</html>