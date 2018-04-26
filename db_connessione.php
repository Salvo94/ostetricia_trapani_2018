<?php
	/* Connect to a MySQL database using driver invocation */
	$dsn = 'mysql:dbname=db_ostetricia;host=127.0.0.1';
	$user = 'root';
	$password = '';

	try {
		$dbh = new PDO($dsn, $user, $password);
	} catch (PDOException $e) {
		echo 'Connection failed: ' . $e->getMessage();
	}
?>