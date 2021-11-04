<?php
	try {
		$con = new PDO("mysql:dbname=db_teste;host=localhost","root","");
		// parametros: 
		// sgbd mais dbname e host
		// usuari
		// senha
	}
	catch (PDOException $e) {
		echo "PDOException".$e->getMessage();
	}
	catch (Exception $e) {
		echo "Erro".$e->getMessage();	
	}

?>