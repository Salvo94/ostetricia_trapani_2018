
<?php
	include "db_connessione.php";
	
	$id_pagamento = $_POST['id_pagamento'];
	$id_utente = $_POST['id_utente'];
	//query
	$sql = "DELETE FROM pagamenti  WHERE Id = ".$id_pagamento."";
	echo($sql);
	$stmt = $dbh -> prepare($sql);
	$stmt -> execute();
	header("Location: gestione_pagamenti_iscritto.php?id=".$id_utente."");
	
?>
