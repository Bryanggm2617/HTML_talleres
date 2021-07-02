<?php
// echo "<h2>1</h2><br>";
include_once( $_SERVER['DOCUMENT_ROOT'] ."p6". "/config.inc.php" );
// echo "<h2>2</h2><br>";
include_once(DIR_INC . "class.mysql.inc.php");
// echo "<h2>3</h2><br>";
$bd = new class_mysql();
//echo "<h2>4</h2><br>";
$bd->insertar($_GET['temp'] , $_GET['volt'], $_GET['hum']);
//echo "<h2>5</h2><br>";
?>