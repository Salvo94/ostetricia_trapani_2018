<?php
	include "db_connessione.php";
	$data_provvedimento = $_POST['data_provvedimento'];
	$tipo_provvedimento = $_POST['tipo_provvedimento'];
	$data_inizio = $_POST['data_inizio'];
	$data_fine = $_POST['data_fine'];
	$id = $_POST['id'];
	$id_utente = $_POST['id_utente'];
	$sql = "UPDATE  provvedimenti_disciplinari SET Data = '".$data_provvedimento."',Tipo_provvedimento = '".$tipo_provvedimento."',Data_inizio = '".$data_inizio."',Data_fine = '".$data_fine."' WHERE Id = ".$id."";			
	$stmt = $dbh -> prepare($sql);
	$stmt -> execute();
	header("Location: gestisci_iscritto.php?id=".$id_utente."");
?>