<?php
	include "db_connessione.php";
	$data_provvedimento = $_POST['data_provvedimento'];
	$tipo_provvedimento = $_POST['tipo_provvedimento'];
	$data_inizio = $_POST['data_inizio'];
	$data_fine = $_POST['data_fine'];
	$id_utente = $_POST['id'];
	$sql = "INSERT INTO provvedimenti_disciplinari(Data,Tipo_provvedimento,Data_inizio,Data_fine,Id_utente)
						values('".$data_provvedimento."','".$tipo_provvedimento."','".$data_inizio."','".$data_fine."','".$id_utente."')";
	$stmt = $dbh -> prepare($sql);
	$stmt -> execute();
	header("Location: gestisci_iscritto.php?id=".$id_utente."");
?>