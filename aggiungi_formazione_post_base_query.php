<?php
	include "db_connessione.php";
	$nome_titolo = $_POST['nome_titolo'];
	$luogo_consegna = $_POST['luogo_consegna'];
	$comune_consegna = $_POST['comune_consegna'];
	$provincia_consegna = $_POST['provincia_consegna'];
	$tipo_titolo = $_POST['tipo_titolo'];
	$data_rilascio = $_POST['data_consegna'];
	$id_utente = $_POST['id'];
	$sql = "INSERT INTO formazione_post_base(Id_utente,Data_rilascio,Nome_titolo,Luogo_consegna,Comune_consegna, Provincia_consegna,Tipo_titolo)
						values(".$id_utente.",'".$data_rilascio."','".$nome_titolo."','".$luogo_consegna."','".$comune_consegna."', '".$provincia_consegna."','".$tipo_titolo."')";
	$stmt = $dbh -> prepare($sql);
	$stmt -> execute();
	Header("Location: gestisci_iscritto.php?id=".$id_utente."");
?>