<?php
$id = $_GET['id'];

$cnx = mysqli_connect("localhost", "user1", "toortoor", "practicas");
$sql = "DELETE FROM sensores3 where id like $id;";
$rta = mysqli_query($cnx, $sql);

if (!$rta) {
    echo "No se pudo eliminar!";
}
else {
    header("Location: index.php");
}
    
?>