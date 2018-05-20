<?php
	include "db_connessione.php";
	$id = $_POST['id'];
	
	//query
	$sql = "UPDATE utenti SET Attivo = 0, Data_disiscrizione = NOW() WHERE Id = ".$id;
	echo ($sql);
	$stmt = $dbh -> prepare($sql);
	$stmt -> execute();
	header("Location: gestisci_iscritti_lista.php");
?>