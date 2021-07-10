<?php
// echo "<h2>1</h2><br>";
include_once($_SERVER['DOCUMENT_ROOT'] . "/site1/p7" . "/config.inc.php");
// echo "<h2>2</h2><br>";
include_once(DIR_INC . "class.mysql.inc.php");
// echo "<h2>3</h2><br>";
$bd = new class_mysql();
//echo "<h2>4</h2><br>";
$bd->insertar($_POST['temp'], $_POST['volt'], $_POST['hum']);
// echo "<h2>Listo</h2><br>";
$bd1 = $bd->listar();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <table>
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
            <tr>
                <td>
                    <form action="<?php $bd->Limpiar();?>"  >

                    <button type="subit" >Borrar </button>
                    </form>
                </td>
                
                <td> 
                    <button type="subit">Actualizar </button>
                </td>
            </tr>
        </table>
    </div>

</body>

</html>