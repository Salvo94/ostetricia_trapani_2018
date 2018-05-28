
<?php
	include "db_connessione.php";
	
	$id_pagamento = $_POST['id_pagamento'];
	$data_pagamento = $_POST['data_pagamento'];
	$id_utente = $_POST['id_utente'];
	//query
	$sql = "UPDATE pagamenti SET Data_pagamento = '".$data_pagamento."' WHERE Id = ".$id_pagamento."";
	echo($sql);
	$stmt = $dbh -> prepare($sql);
	$stmt -> execute();
	header("Location: gestione_pagamenti_iscritto.php?id=".$id_utente."");
	
?>
