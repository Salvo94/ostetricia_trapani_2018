<html>
	<head>
		<title> Gestionale albo </title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php include "testata.php" ?>
		<div class = "container">
			<div class="row">
				<div class="col text-center">
					<br>
					<h4> Gestione iscritti </h4>
					<br>
				</div>
			</div>
			</br>
			</br>
			<div class="row">
				<table class="table table-striped">
					<tr>
						<th> N. iscrizione </th>
						<th> Nome </th>
						<th> Cognome </th>
						<th> Indirizzo </th>
						<th> Codice Fiscale </th>
						<th> Gestisci </th>					
					</tr>
					<?php
						include "db_connessione.php";
						$sql = "SELECT * FROM utenti WHERE Attivo = 1";
						foreach ($dbh -> query($sql) as $row){
							echo('<tr>
									<td> '.$row['Numero_iscrizione'].'</td>
									<td> '.$row['Nome'].'  </td>
									<td> '.$row['Cognome'].' </td>
									<td> '.$row['Indirizzo'].' - '.$row['Cap'].' - '.$row['Citta'].' ('.$row['Provincia'].') - '.$row['Regione'].' - '.$row['Nazione'].' </td>
									<td> '.$row['Cod_Fiscale'].' </td>
									<td class="text-center"> <a href="gestisci_iscritto.php?id='.$row['Id'].'"> <i class="fas fa-edit"> </i> </a></td>
								
								</tr>');
							
						}
					?>
				</table>
					
			</div>
		</div>
		
		
		
	</body>
</html>