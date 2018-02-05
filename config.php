<?php 


$dsn = "mysql:dbname=exercicios;host=localhost";
$dbuser = "root";
$dbpass = "";

try {

	$pdo = new PDO($dsn, $dbuser, $dbpass);
	echo "Conectado";	

} catch (PDOException $e){

	
	echo "Falhou a conexão: ".$e->getMessage();	

}


?>