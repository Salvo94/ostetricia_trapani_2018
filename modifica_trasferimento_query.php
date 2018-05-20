<?php
	include "db_connessione.php";
	$collegio_partenza = $_POST['collegio_partenza'];
	$collegio_destinazione = $_POST['collegio_destinazione'];
	$data_trasferimento = $_POST['data_trasferimento'];
	$id = $_POST['id'];

	$sql = "UPDATE  trasferimenti SET Collegio_partenza = '".$collegio_partenza."',Collegio_destinazione = '".$collegio_destinazione."',Data_trasferimento='".$data_trasferimento."' WHERE Id = ".$id."";
	
	$stmt = $dbh -> prepare($sql);
	$stmt -> execute();
	header("Location: gestione_trasferimenti.php");
?>