<?php

	// In localhost
	// $dsn = "mysql:host=localhost;dbname=techbarik";

	// try {
	// 	$pdo = new PDO($dsn, 'root', '');
	// }




	// In Checking Remote DB Connection

	$dsn = "mysql:host=remotemysql.com;dbname=hRLfKonC1X";

	try {
		$pdo = new PDO($dsn, 'hRLfKonC1X', 'CRMFJqs9MK');
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}

?>