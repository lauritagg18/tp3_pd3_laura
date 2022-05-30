<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>Expresionismo/Resultados</title>
	<meta name = "viewport" content = "width = device-width,initial-scale = 1.0">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">
</head>

<body>
<header>
		<nav>
			<a href="origen.html">Origen</a>
			<a href="filosofia.html">Filosofia</a>
			<a href="artistas.html">Artistas</a>
			<a href="galeria.html">Galería</a>
			<a href="contacto.html">Contacto</a>
		</nav>
	<div class="btn"> 
	  <img class="lupa" src="imagenes/lupa.png" alt="lupa"></a>
	  <form class="buscar" action="resultados_buscar.php" method="post"> 
	  <input type="search" name="buscar" placeholder="Buscar..." />
      <input type="submit" value="Enviar">
	    </form>
  </div>
		<a href="index.html"><img class="logo" src="imagenes/Expresionismo.png" alt="Expresionismo"></a>
	    <a href="index.html"><img class="logueo" src="imagenes/Logueo.png" alt="Ícono de logueo"></a>
</header>
<section>
<?php
	include('conexion.php');

	$buscar = $_POST['buscar'];
	echo "Su consulta: <em>".$buscar."</em><br>";

	$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' ");
?>
<article class="formulario">
	<p>Cantidad de Resultados: 
	<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p>
    
	<?php
		while($resultados=mysqli_fetch_array($consulta)) {
	?>
    <p>
    <?php	
			echo $resultados['nombre'] . " ";
			echo $resultados['apellido'] . "<br>";
			echo $resultados['bio'] . " ";
	?>
    </p>
    <img src="<?php echo $resultados['foto'];?>">
    <hr/>
    <?php
		}

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>
</article>
</section>
<footer>
	
	<div class="fot">
		<a href="políticadecookies.html">política de cookies</a>
		<a href="políticadeprivacidad.html">política de privacidad</a>
		<a href="condicionesdeuso.html">condiciones de uso</a>
	</div>
	<div class="fot">
		<a href="avisolegal.html">aviso legal</a>
		<a href="contacto.html">contactar</a>
		<a>2022 © EISMO.COM</a>
	</div>
		<div class="fot">
		<a href="soporte.html">ayuda y soporte técnico</a>
		<a href="contacto.html">suscríbete a la newsletter</a>
		<a href="mundo.html">EISMO EN EL MUNDO</a>
	</div>
<section class="secredes">
			<div class="redes">
				<a href="http://www.instagram.com"><img src="imagenes/insta.png" alt="Instagram"></a>
			</div>
			<div class="redes">
				<a href="http://www.facebook.com"><img src="imagenes/face.png" alt="Facebook"></a>
			</div>
			<div class="redes">
				<a href="http://www.twitter.com"><img src="imagenes/twiiter.png" alt="Twitter"></a>
			</div>
			<div class="redes">
				<a href="http://www.youtube.com"><img src="imagenes/youtube.png" alt="Whatsapp"></a>
			</div>
 </section>
 <section class="name">
			<a class="name" href="email.html" target="_blank">Laura C Guillen G</a>
 </section>
</footer>
	<script>function myFunction() {var x = document.getElementById("mimenu");if (x.className === " ") {x.className += " menucelular";} else {x.className = " ";}}</script>
</body>
</html>
