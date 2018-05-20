
<?php
	include "db_connessione.php";
	
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
	$sesso = $_POST['sesso'];
	echo($sesso);
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
	$sql = "INSERT INTO utenti (Nome, Cognome, Data_nascita,Sesso, Comune_nascita,Cittadinanza,Cod_fiscale, Data_iscrizione,
								Nazione, Regione,Citta,Provincia,Cap,Indirizzo,Tel_fisso,Cellulare,Email,Pec,Numero_iscrizione,Attivo)
			VALUES('".$nome."','".$cognome."','".$data_nascita."','".$sesso."', '".$comune_nascita."','".$cittadinanza."','".$codice_fiscale."', now() ,'".$nazione."',
					'".$regione."','".$citta."','".$provincia."',".$cap.",'".$indirizzo."',".$telefono_fisso.",".$telefono_cellulare.",
					'".$email."','".$pec."',".$numero_iscrizione.",1)";
	echo($sql);
	$stmt = $dbh -> prepare($sql);
	$stmt -> execute();
	header("Location: gestisci_iscritti_lista.php");
	
	
?>
