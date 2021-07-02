<?php

class class_mysql
{
	var $MySQL_host;
	var $MySQL_user;
	var $MySQL_passwd;
	var $MySQL_dbname;
	var $MYSQL_debug;	//	Si es true (defecto) presenta mensajes de error
	//		var $error_msg;		//	Contiene el mensaje de error a enviarse al navegador
	var $connection;

	function class_mysql()
	{
		$this->MySQL_host = MYSQL_HOST;
		$this->MySQL_user = MYSQL_USER;
		$this->MySQL_passwd = MYSQL_PASSWD;
		$this->MySQL_dbname = MYSQL_DBNAME;
		$this->MYSQL_debug = MYSQL_DEBUG;
		// Creates a connection to the database
		$this->connection = $this->connect();
	}

	function connect()
	{
		$result = false;
		$connection = new  mysqli($this->MySQL_host, $this->MySQL_user, $this->MySQL_passwd, $this->MySQL_dbname);
		if (!connection) {
			$error_msg = "<center><h2>FALLO AL CONECTAR A LA BASE DE DATOS.<BR>informe al administrador del sitio<br>";
			$error_msg .= "Error: " . mysqli_error($connection) . "<h2></center>";
			$this->send_error_msg($error_msg);
		}
		return $connection;
	}


	function send_error_msg($error_msg)
	{
		if ($this->MYSQL_debug)
			echo $error_msg;
	}

	function query($sentence)
	{
		$result = false;
		if ($this->connection) {
			$result = $this->connection->query($sentence);
			if (!$result) {
				$error_msg = "<center><h3>Fallo al ejecutar la sentencia<h3><h4>$sentence<br>";
				$error_msg .= "Error: " . mysqli_error($this->connection) . "<h2></center>";
				$error_msg .= "</h4></center>";
				$this->send_error_msg($error_msg);
			}
		}
		return $result;
	}

	function insertar($t, $v, $h)
	{
		$bd = new class_mysql();
		$sql = "INSERT INTO sensores1 (id, temperatura, voltaje, humedad) VALUES (NULL, '" . $t . "', '" . $v . "', '" . $h . "');";
		return $bd->query($sql);
	}
} // closes the class definition
?>