<?php
$id = $_POST['id'];
$tem = $_POST['tem'];
$volt = $_POST['volt'];
$hum = $_POST['hum'];
$cnx = mysqli_connect("localhost", "user1", "toortoor", "practicas");
$sql = "UPDATE sensores3 set Temperatura='$tem', Voltaje='$volt', Humedad='$hum' where id like $id;";
echo $sql;
$rta = mysqli_query($cnx, $sql);

if (!$rta) {
    echo "No se pudo actualizar!";
}
else {
    header("Location: index.php");
}
    
?>