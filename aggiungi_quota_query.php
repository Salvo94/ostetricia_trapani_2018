
<?php
	include "db_connessione.php";
	
	
	$anno = $_POST['anno'];

	
	//query
	$sql = "INSERT INTO annualita (Anno)
			VALUES(".$anno.")";
	echo($sql);
	$stmt = $dbh -> prepare($sql);
	$stmt -> execute();
	header("Location: gestione_pagamenti.php");
	
	
?>
