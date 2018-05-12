<?php
	include "db_connessione.php";
	$id = $_POST['id'];
	$id_utente = $_POST['id_utente'];
	//query
	$sql = "DELETE FROM formazione WHERE Id = ".$id;
	echo ($sql);
	$stmt = $dbh -> prepare($sql);
	$stmt -> execute();
	header("Location: gestisci_iscritto.php?id=".$id_utente."");
?>