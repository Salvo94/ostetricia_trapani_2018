<?php
	include "db_connessione.php";
	$nome_titolo = $_POST['nome_titolo'];
	$luogo_consegna = $_POST['luogo_consegna'];
	$comune_consegna = $_POST['comune_consegna'];
	$provincia_consegna = $_POST['provincia_consegna'];
	$tipo_titolo = $_POST['tipo_titolo'];
	$data_rilascio = $_POST['data_consegna'];
	$id = $_POST['id'];
	$id_utente = $_POST['id_utente'];

	$sql = "UPDATE  formazione SET Data_rilascio = '".$data_rilascio."',Nome_titolo = '".$nome_titolo."',Luogo_consegna='".$luogo_consegna."',Comune_consegna = '".$comune_consegna."', Provincia_consegna = '".$provincia_consegna."',Tipo_titolo = '".$tipo_titolo."' WHERE Id = ".$id."";
						
	$stmt = $dbh -> prepare($sql);
	$stmt -> execute();
		header("Location: gestisci_iscritto.php?id=".$id_utente."");
?>