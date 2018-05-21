<?php
	include "db_connessione.php";
	$id = $_POST['id'];
	
	//query
	$sql = "UPDATE utenti SET Attivo = 1, Data_disiscrizione = '' WHERE Id = ".$id;
	echo ($sql);
	$stmt = $dbh -> prepare($sql);
	$stmt -> execute();
	
	$sql = "DELETE FROM trasferimenti WHERE Id_utente = ".$id;
	echo ($sql);
	$stmt = $dbh -> prepare($sql);
	$stmt -> execute();
	header("Location: storico_iscritti.php");
?>