<?php
$tem = $_POST['tem'];
$volt = $_POST['volt'];
$hum = $_POST['hum'];
$cnx = mysqli_connect("localhost", "user1", "toortoor", "practicas");
$sql = "INSERT INTO sensores3 ( Temperatura, Voltaje, Humedad) VALUES('$tem', '$volt', '$hum');";
$rta = mysqli_query($cnx, $sql);

if (!$rta) {
    echo "No se pudo insertar!   1";
}
else {
    header("Location: index.php");
}
    
?>