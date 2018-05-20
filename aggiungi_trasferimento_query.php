<?php
	include "db_connessione.php";
	$collegio_partenza = $_POST['collegio_partenza'];
	$collegio_destinazione = $_POST['collegio_destinazione'];
	$data_trasferimento = $_POST['data_trasferimento'];
	$id_utente = $_POST['id'];
	$sql = "INSERT INTO trasferimenti(Id_utente,Collegio_partenza,Collegio_destinazione,Data_trasferimento)
						values(".$id_utente.",'".$collegio_partenza."','".$collegio_destinazione."','".$data_trasferimento."')";
	$stmt = $dbh -> prepare($sql);
	$stmt -> execute();
	$sql = "UPDATE  utenti SET attivo = 2 WHERE Id = ".$id_utente."";
	$stmt = $dbh -> prepare($sql);
	$stmt -> execute();
	Header("Location: gestione_trasferimenti.php");
?>