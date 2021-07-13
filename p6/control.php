<?php
// echo "<h2>1</h2><br>";
include_once($_SERVER['DOCUMENT_ROOT'] . "/site1/p6" . "/config.inc.php");
// echo "<h2>2</h2><br>";
include_once(DIR_INC . "class.mysql.inc.php");
// echo "<h2>3</h2><br>";
$bd = new class_mysql();
//echo "<h2>4</h2><br>";
$bd->insertar($_GET['temp'], $_GET['volt'], $_GET['hum']);
// echo "<h2>Listo</h2><br>";
$bd1 = $bd->listar();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- BOOTSTRAP 4 CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<!-- CUSTOM CSS -->
	<link rel="stylesheet" href="../static/css/main.css">
	<title>Document</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark">
		<a class="navbar-brand" href="../index.html" style="font-Size:30px">Comunicaciones</br>Avanzadas</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="../p2/index.html">Practica Js</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../p3/">Practica PHP</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../p4/">Practica</br>Formulario GET</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../p5/">Practica</br>Formulario POST</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../p6/">Practica GET</br>NodeMCU</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../p7/">Practica POST</br>NodeMCU</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../p8/">Practica MQTT</br>NodeMCU</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../p9/">Practica Tabla</br>Dinámica</a>
				</li>
			</ul>
		</div>
	</nav>


	<div class="container p-4">


		<div class="jumbotron" id="opac1">

			<center>
				<div>
                    <h3> Método GET </h3>
					<table border="2">
						<tr>
							<td>id</td>
							<td>Temperatura</td>
							<td>Voltaje</td>
							<td>Humedad</td>
						</tr>
						<?php
						while ($row = mysqli_fetch_array($bd1)) {
						?>
							<tr>
								<td><?php echo $row['id']; ?> </td>
								<td><?php echo $row['temperatura']; ?></td>
								<td><?php echo $row['voltaje']; ?></td>
								<td><?php echo $row['humedad']; ?></td>
							</tr>
						<?php } ?>
					</table>
				</div>

			</center>

		</div>


	</div>


	<script src="js/main.js"></script>

</body>

</html>