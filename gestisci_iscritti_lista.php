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
						<th> Elimina </th>
					</tr>
					<?php
						include "db_connessione.php";
						$sql = "SELECT * FROM utenti";
						foreach ($dbh -> query($sql) as $row){
							echo('<tr>
									<td> '.$row['Numero_iscrizione'].'</td>
									<td> '.$row['Nome'].'  </td>
									<td> '.$row['Cognome'].' </td>
									<td> '.$row['Indirizzo'].' - '.$row['Cap'].' - '.$row['Citta'].' ('.$row['Provincia'].') - '.$row['Regione'].' - '.$row['Nazione'].' </td>
									<td> '.$row['Cod_Fiscale'].' </td>
									<td class="text-center"> <a href="gestisci_iscritto.php?id='.$row['Id'].'"> <i class="fas fa-edit"> </i> </a></td>
									<td class="text-center"> <a href="" data-toggle="modal" data-target="#cancellaUtente'.$row['Id'].'"> <i class="fas fa-trash-alt"> </i> </a> </td>
								</tr>');
							echo('<div class="modal fade" id="cancellaUtente'.$row['Id'].'" tabindex="-1" role="dialog" aria-labelledby="cancellaUtente'.$row['Id'].'" aria-hidden="true">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="cancellaUtente'.$row['Id'].'">Conferma cancellazione iscritto</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										  <span aria-hidden="true">&times;</span>
										</button>
									  </div>
									  <div class="modal-body">
										
											<div class="row">
												<div class="col-md-6">
													<form method="post" action ="elimina_iscritto_query.php">
														<input type="hidden" value="'.$row['Id'].'" name="id">
														<div class="form-group">
															<div class="input-group">
																	<input class="btn btn-danger form-control" type="submit" value="SI" >
															</div>
														</div>
													</form>
												</div>			
											<div class="col-md-6">
													<div class="form-group">
														<div class="input-group">
															<button class="btn btn-primary form-control " data-dismiss="modal" >NO </button>
														</div>
													</div>
												</div>
											</div>				
									  </div>
									</div>
								  </div>
								</div>');
						}
					?>
				</table>
					
			</div>
		</div>
		
		
		
	</body>
</html>