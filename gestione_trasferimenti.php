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
					<h4> Gestione trasferimenti </h4>
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
						<th> Cod. fisc. </th>
						<th> Data trasferimento </th>
						<th> Collegio di partenza </th>
						<th> Collegio di destinazione </th>
						<th> Modifica </th>
					</tr>
					<?php
						include "db_connessione.php";
						$sql = "SELECT utenti.Id as Id_utente , utenti.Nome as Nome_utente, utenti.Cognome as Cognome_utente, utenti.Numero_iscrizione as Numero_iscrizione, utenti.Cod_fiscale as Cod_fiscale, trasferimenti.Id as Id_trasferimento, trasferimenti.Collegio_partenza as Collegio_Partenza, trasferimenti.Collegio_destinazione as Collegio_destinazione, trasferimenti.Data_trasferimento as Data_trasferimento FROM trasferimenti INNER JOIN utenti ON trasferimenti.Id_utente = utenti.Id ";
						foreach ($dbh -> query($sql) as $row){
							echo('<tr>
									<td> '.$row['Numero_iscrizione'].'</td>
									<td> '.$row['Nome_utente'].'  </td>
									<td> '.$row['Cognome_utente'].' </td>
									<td> '.$row['Cod_fiscale'].' </td>
									<td> '.$row['Data_trasferimento'].'</td>
									<td> '.$row['Collegio_Partenza'].' </td>
									<td> '.$row['Collegio_destinazione'].' </td>
									<td class="text-center"> 
														<a href="" data-toggle="modal" data-target="#modifica_trasferimento'.$row['Id_trasferimento'].'"> 
															<i class="fas fa-edit"> </i> 
														</a> 
									</td>
								
								</tr>');
							echo('<div class="modal fade" id="modifica_trasferimento'.$row['Id_trasferimento'].'" tabindex="-1" role="dialog" aria-labelledby="trasferisciUtente" aria-hidden="true">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="cancellaUtente">Modifica trasferimento</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										  <span aria-hidden="true">&times;</span>
										</button>
									  </div>
									  <div class="modal-body">										
													<form method="post" action ="modifica_trasferimento_query.php">
														<input type="hidden" value="'.$row['Id_trasferimento'].'" name="id">
														<div class="form-group">
																<label><b>Collegio di partenza</b> </label>
																<div class="input-group">
																		<input type="text" class="form-control" id="collegio_partenza" name="collegio_partenza"  value="'.$row['Collegio_Partenza'].'"  required>
																</div>
															</div>
															<div class="form-group">
																<label><b>Collegio di destinazione</b> </label>
																<div class="input-group">
																		<input type="text" class="form-control" id="collegio_destinazione" name="collegio_destinazione"  value="'.$row['Collegio_destinazione'].'"   required>
																</div>
															</div>
															<div class="form-group">
																<label><b>Data trasferimento</b> </label>
																<div class="input-group">
																		<input type="date" class="form-control" id="data_trasferimento" name="data_trasferimento" value="'.$row['Data_trasferimento'].'"   required>															
																</div>
															</div>
														<div class="form-group">
															<div class="input-group">															
																	<input class="btn btn-primary form-control" type="submit" value="Modifica trasferimento" >
															</div>
														</div>
													</form>																							
																																			
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