<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<!-- BOOTSTRAP 4 CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
		integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<!-- CUSTOM CSS -->
	<link rel="stylesheet" href="../static/css/main.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
		<a class="navbar-brand" href="../index.html" style="font-Size:30px">Comunicaciones</br>Avanzadas</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
		

        <div class="jumbotron" id="opac1" >
<center>

<?php
        echo "<h3>TABLA DINÁMICA </h3>"; 
?>

<?php
$id = $_GET['id'];
$tem = $_GET['tem'];
$volt = $_GET['volt'];
$hum = $_GET['hum'];
?>

    <div>
    <form action="speditar.php" method="POST">

            <tr>
                <td>Ingresar Datos</td>
                <td><input type="text" name="id" style="visibility:hidden"value="<?=$id?>"></td>
            </tr>

    <table border="4">

            <tr>
                <td>Temperatura:</td>
                <td><input type="text" name="tem" id=""value="<?=$tem?>"></td>
            </tr>
            <tr>
                <td>Voltaje:</td>
                <td><input type="text" name="volt" id=""value="<?=$volt?>"></td>
            </tr>
            <tr>
                <td>Humedad:</td>
                <td><input type="text" name="hum" id=""value="<?=$hum?>"></td>
            </tr>

        </table>
        
        <tr>
                <td><input type="submit" class="btn btn-outline-primary" value="Actualizar"></td>
                <td><a href="index.php"><button type="button" class="btn btn-outline-primary">Cancelar</button></a></t>

            </tr>

    </form>

    </div>


    </div>


</div>


<script src="js/main.js"></script>
</body>
</html>