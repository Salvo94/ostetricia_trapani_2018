<?php
	include "db_connessione.php";
	$id = $_POST['id'];
	echo ($id);
	echo ("<br>");
	$nome = $_POST['nome'];
	echo($nome);
	echo("<br>");
	$cognome = $_POST['cognome'];
	echo($cognome);
	echo("<br>");
	$comune_nascita = $_POST['comune_nascita'];
	echo($comune_nascita);
	echo("<br>");
	$codice_fiscale = $_POST['codice_fiscale'];
	echo($codice_fiscale);
	echo("<br>");
	$data_nascita = $_POST['data_nascita'];
	echo($data_nascita);
	echo("<br>");
	$cittadinanza = $_POST['cittadinanza'];
	echo($cittadinanza);
	echo("<br>");
	$indirizzo = $_POST['indirizzo'];
	echo($indirizzo);
	echo("<br>");
	$citta = $_POST['citta'];
	echo($citta);
	echo("<br>");
	$cap = $_POST['cap'];
	echo($cap);
	echo("<br>");
	$provincia = $_POST['provincia'];
	echo($provincia);
	echo("<br>");
	$regione = $_POST['regione'];
	echo($regione);
	echo("<br>");
	$nazione = $_POST['nazione'];
	echo($nazione);
	echo("<br>");
	$telefono_cellulare = $_POST['telefono_cellulare'];
	echo($telefono_cellulare);
	echo("<br>");
	$telefono_fisso = $_POST['telefono_fisso'];
	echo($telefono_fisso);
	echo("<br>");
	$email = $_POST['email'];
	echo($email);
	echo("<br>");
	$pec = $_POST['pec'];
	echo($pec);
	echo("<br>");
	$numero_iscrizione = $_POST['numero_iscrizione'];
	echo($numero_iscrizione);
	
	//query
	$sql = "UPDATE utenti 
			SET Nome = '".$nome."', Cognome = '".$cognome."', Cod_Fiscale = '".$codice_fiscale."', Data_Nascita = '".$data_nascita."',
			Comune_nascita = '".$comune_nascita."', Cittadinanza = '".$cittadinanza."', Nazione = '".$nazione."', Regione = '".$regione."', 
			Citta = '".$citta."', Provincia = '".$provincia."', Cap = ".$cap.", Indirizzo = '".$indirizzo."' , Tel_Fisso = ".$telefono_fisso.",
			Cellulare = ".$telefono_cellulare.", Email = '".$email."', Pec = '".$pec."', Numero_iscrizione = '".$numero_iscrizione."' WHERE Id = ".$id."";
	echo($sql);
	$stmt = $dbh -> prepare($sql);
	$stmt -> execute();
	//header("Location: gestisci_iscritto.php?id=".$id);	
	
	
?>