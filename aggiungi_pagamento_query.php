
<?php
	include "db_connessione.php";
	
	$id_utente = $_POST['id_utente'];
	$id_annualita = $_POST['id_annualita'];
	$data_pagamento = $_POST['data_pagamento'];
	
	//query
	$sql = "INSERT INTO pagamenti (Id_annualita,Id_utente,Data_pagamento)
			VALUES(".$id_annualita.",".$id_utente.",'".$data_pagamento."')";
	echo($sql);
	$stmt = $dbh -> prepare($sql);
	$stmt -> execute();
	header("Location: gestione_pagamenti.php");
	
	
?>
