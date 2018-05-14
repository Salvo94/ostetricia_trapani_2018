
<?php
	include "db_connessione.php";
	
	$id_pagamento = $_POST['id_pagamento'];
	//query
	$sql = "DELETE FROM pagamenti  WHERE Id = ".$id_pagamento."";
	echo($sql);
	$stmt = $dbh -> prepare($sql);
	$stmt -> execute();
	header("Location: gestione_pagamenti.php");
	
?>
