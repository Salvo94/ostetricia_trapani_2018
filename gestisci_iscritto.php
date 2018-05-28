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
					<h4> Gestisci iscritto </h4>
					<br>
				</div>
			</div>
			<?php
				include "db_connessione.php";
				$id = $_GET['id'];
				$sql = "SELECT * FROM utenti WHERE Id = ".$id."";
				$stmt = $dbh -> prepare($sql);
				$stmt -> execute();
				$result = $stmt->fetch(PDO::FETCH_ASSOC);
	
			?>
			<div class="row text-center">
				<div class="col">
				</div>
				<div class="col">
					<a href="gestione_pagamenti_iscritto.php?id=<?php echo($id); ?>" ><i class="fa fa-credit-card"></i> Gestisci pagamenti</a>
				</div>
				<div class="col">
					<a href="#"  data-toggle="modal" data-target="#trasferisciUtente"><i class="fa fa-exchange-alt"></i>&nbsp Trasferisci</a>
				</div>
				<div class="col">
					<a href="#" data-toggle="modal" data-target="#cancellaUtente" ><i class="fa fa-trash-alt"></i>&nbsp Cancella iscritto</a>
				</div>
				<div class="col">
				</div>
				
			</div>
			<br>
			<div class="row border rounded p-3">
			
				<div class="col">
					<div class="row">
						<div class="col-4">

						</div>
						<div class="col-4 text-center">
							<h5>Scheda dati generici </h5>
						</div>
						<div class="col-4 text-right">
							<a href="#" data-toggle="modal" data-target="#modifica_dati"><i class="fa fa-edit"></i>Modifica dati</a>
						</div>
					</div>
					</br>
					</br>
					<div class="row">
						<div class="col-2">
							<img src="img/no-picture.png" class="img-thumbnail"> </img>

						</div>
						<div class="col-2">
							<div class="row">
								<div class="col">
									<p> <b>Nome: </br> </b><?php echo($result['Nome']); ?> </p>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<p> <b>Data di nascita:</br> </b> <?php echo($result['Data_Nascita']);?> </p>
								</div>
							</div>



						</div>
						<div class="col-2">
							<div class="row">
								<div class="col">
									<p> <b>Cognome:</br> </b><?php echo($result['Cognome']); ?>  </p>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<p> <b>Codice fiscale: </br></b><?php echo($result['Cod_Fiscale']); ?>  </p>
								</div>
							</div>

						</div>
						<div class ="col-2">
							<div class="row">
								<div class="col">
									<p> <b>Numero iscrizione:</br> </b><?php echo($result['Numero_iscrizione']); ?> </p>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<p> <b>Data iscrizione Albo:<br></b><?php echo($result['Data_iscrizione']); ?>  </p>
								</div>
							</div>
						</div>
						<div class="col-2">
							<div class="row">
								<div class="col">
									<p> <b>Comune di nascita:</br> </b><?php echo($result['Comune_nascita']); ?>  </p>
								</div>
							</div>
						</div>
						<div class="col-2">
							<div class="row">
								<div class="col">
									<p> <b>Cittadinanza:</br> </b><?php echo($result['Cittadinanza']); ?>  </p>
								</div>
							</div>
						</div>

					</div>

					<div class="row">
						<div class="col-2">

						</div>
						<div class="col-10">
							<div class="row">
								<div class="col">
									<p> <b>Indirizzo:</br> </b><?php echo($result['Cap'].' - '.$result['Citta'].' ('.$result['Provincia'].') - '.$result['Regione'].' - '.$result['Nazione']); ?></p>
								</div>
							</div>


						</div>



					</div>
					</br>
					<div class="row">
						<div class="col-2">

						</div>
						<div class="col-2">
							<div class="row">
								<div class="col">
									<p> <b>Email:</br> </b><?php echo($result['Email']); ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<p> <b>Telefono fisso:</br> </b><?php echo($result['Tel_Fisso']); ?> </p>
								</div>
							</div>
						</div>
						<div class="col-2">

						</div>
						<div class="col-2">

						</div>
						<div class="col-2">
							<div class="row">
								<div class="col">
									<p> <b>Pec:</br> </b><?php echo($result['Pec']);?></p>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<p> <b>Cellulare:</br> </b><?php echo($result['Cellulare']);?> </p>
								</div>
							</div>
						</div>
						<div class="col-2">

						</div>
					</div>

				</div>
			</div>
			</br>
			<div class="row border rounded p-3">

				<div class="col">
					<div class="row">
						<div class="col-4">

						</div>
						<div class="col-4 text-center">
							<h5>Scheda formazione </h5>
						</div>
						<div class="col-4 text-right">
							<a href="#" data-toggle="modal" data-target="#aggiungi_fomazione"><i class="fa fa-plus"></i>&nbsp Aggiungi titolo</a>
						</div>
					</div>
					</br>
					</br>
					<div class="row">
							<table class="table table-striped">
								<tr>
									<th>
										Nome titolo
									</th>
									<th>
										Luogo consegna
									</th>
									<th>
										Comune consegna
									</th>
									<th>
										Provincia consegna
									</th>
									<th>
										Data rilascio
									</th>
									<th>
										Tipo titolo
									</th>
									<th>
										Modifica titolo
									</th>
									<th>
										Elimina titolo
									</th>
								</tr>
									<?php
										$sql = "SELECT * FROM formazione WHERE Id_utente = ".$id."";
										foreach ($dbh -> query($sql) as $row){
											echo("<tr>
													<td>
														".$row['Nome_titolo']."
													</td>
													<td>
														".$row['Luogo_consegna']."
													</td>
													<td>
														".$row['Comune_consegna']."
													</td>
													<td>
														".$row['Provincia_consegna']."
													</td>
													<td>
														".$row['Data_rilascio']."
													</td>
													<td>
														".$row['Tipo_titolo']."
													</td>
													<td class='text-center'> 
														<a href='' data-toggle='modal' data-target='#modificaFormazione".$row['Id']."'> 
															<i class='fas fa-edit'> </i> 
														</a> 
													</td>
													<td class='text-center'> 
														<a href='' data-toggle='modal' data-target='#cancellaFormazione".$row['Id']."'> 
															<i class='fas fa-trash-alt'> </i> 
														</a> 
													</td>
														
												</tr>");
												if($row['Tipo_titolo'] == "Diploma"){
													$select_a = "SELECTED";
													$select_b = "";
													$select_c = "";
												}
												if($row['Tipo_titolo'] == "Laurea"){
													$select_a = "";
													$select_b = "Selected";
													$select_c = "";
												}
												if($row['Tipo_titolo'] == "Titolo professionale"){
													$select_a = "";
													$select_b = "";
													$select_c = "SELECTED";
												}
												echo('<!-- Modal fade per modifica titoli formazione -->
													<div class="modal fade" id="modificaFormazione'.$row['Id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
													  <div class="modal-dialog modal-lg" role="document">
														<div class="modal-content">
														  <div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">Modifica titolo formazione</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															  <span aria-hidden="true">&times;</span>
															</button>
														  </div>
														  <div class="modal-body">			
																<form method="post" action ="modifica_formazione_query.php" >
																	<input type="hidden" value = "'.$row['Id'].'" Name = "id" />
																	<input type="hidden" value = "'.$id.'" Name = "id_utente" />
																	<div class="form-group">
																		<label><b>Nome titolo</b> </label>
																		<div class="input-group">						
																				<input type="text" class="form-control" id="nome_titolo" name="nome_titolo" aria-describedby="Nome titolo" value="'.$row['Nome_titolo'].'" placeholder="esempio: Perito ragioniere" required>
																		</div>
																	</div>
																	<div class="form-group">
																		<label><b>Luogo consegna</b> </label>
																		<div class="input-group">
																				<input type="text" class="form-control" id="luogo_consegna" name="luogo_consegna" value="'.$row['Luogo_consegna'].'" aria-describedby="Nome università, nome scuola, ecc.." placeholder="Luogo consegna (Nome università, nome scuola, ecc..)" required>
																		</div>
																	</div>
																	<div class="form-group">
																		<label><b>Comune consegna</b> </label>
																		<div class="input-group">								
																				<input type="text" class="form-control" id="comune_consegna" value="'.$row['Comune_consegna'].'" name="comune_consegna" aria-describedby="Comune consegna" required >
																		</div>
																	</div>
																	<div class="form-group">
																		<label><b>Provincia consegna</b> </label>
																		<div class="input-group">						
																				<input type="text" class="form-control" id="provincia_consegna" value="'.$row['Provincia_consegna'].'" name="provincia_consegna" aria-describedby="Provincia consegna" required >
																		</div>
																	</div>
																	<div class="form-group">
																		<label><b>Data consegna</b> </label>
																		<div class="input-group">							
																				<input type="date" class="form-control" id="data_consenga" name="data_consegna" value="'.$row['Data_rilascio'].'" aria-describedby="Data consegna" required>
																		</div>
																	</div>
																	<div class="form-group">
																		<label><b>Tipo titolo</b> </label>
																		<div class="input-group">					
																				<select class="form-control" id="tipo_titolo" name="tipo_titolo" required>
																					<option  value="Diploma" '.$select_a.'> Diploma </option>
																					<option value="Laurea" '.$select_b.' > Laurea </option>
																					<option value="Titolo professionale" '.$select_c.'> Titolo professionale </option>
																				</select>
																		</div>
																	</div>
														  </div>
														  <div class="modal-footer">		
																<input type="submit" class="btn btn-primary" value="Modifica titolo">		
																</form>
														  </div>
														</div>
													  </div>
													</div>');
													
												echo('<div class="modal fade" id="cancellaFormazione'.$row['Id'].'" tabindex="-1" role="dialog" aria-labelledby="cancellaUtente'.$row['Id'].'" aria-hidden="true">
														  <div class="modal-dialog" role="document">
															<div class="modal-content">
															  <div class="modal-header">
																<h5 class="modal-title" id="cancellaUtente'.$row['Id'].'">Conferma cancellazione titolo</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																  <span aria-hidden="true">&times;</span>
																</button>
															  </div>
															  <div class="modal-body">
																
																	<div class="row">
																		<div class="col-md-6">
																			<form method="post" action ="elimina_formazione_query.php">
																				<input type="hidden" value="'.$row['Id'].'" name="id">
																				<input type="hidden" value="'.$row['Id_utente'].'" name="id_utente">
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
			</div>
			<br />
			<div class="row border rounded p-3">

				<div class="col">
					<div class="row">
						<div class="col-4">

						</div>
						<div class="col-4 text-center">
							<h5>Scheda formazione post base </h5>
						</div>
						<div class="col-4 text-right">
							<a href="#" data-toggle="modal" data-target="#aggiungi_formazione_post_base" ><i class="fa fa-plus"></i> &nbsp Aggiungi titolo </a>
						</div>
					</div>
					</br>
					</br>
					<div class="row">
							<table class="table table-striped">
								<tr>
									<th>
										Nome titolo
									</th>
									<th>
										Luogo consegna
									</th>
									<th>
										Comune consegna
									</th>
									<th>
										Provincia consegna
									</th>
									<th>
										Data rilascio
									</th>
									<th>
										Tipo titolo
									</th>
									<th>
										Modifica titolo
									</th>
									<th>
										Elimina titolo
									</th>
								</tr>
								<?php
										$sql = "SELECT * FROM formazione_post_base WHERE Id_utente = ".$id."";
										foreach ($dbh -> query($sql) as $row){
											echo("<tr>
													<td>
														".$row['Nome_titolo']."
													</td>
													<td>
														".$row['Luogo_consegna']."
													</td>
													<td>
														".$row['Comune_consegna']."
													</td>
													<td>
														".$row['Provincia_consegna']."
													</td>
													<td>
														".$row['Data_rilascio']."
													</td>
													<td>
														".$row['Tipo_titolo']."
													</td>
													<td class='text-center'> 
														<a href='' data-toggle='modal' data-target='#modificaFormazionePostBase".$row['Id']."'> 
															<i class='fas fa-edit'> </i> 
														</a> 
													</td>
													<td class='text-center'> 
														<a href='' data-toggle='modal' data-target='#cancellaFormazionePostBase".$row['Id']."'> 
															<i class='fas fa-trash-alt'> </i> 
														</a> 
													</td>
														
												</tr>");
												if($row['Tipo_titolo'] == "Laurea specialistica"){
													$select_a = "SELECTED";
													$select_b = "";
												}
												if($row['Tipo_titolo'] == "Master"){
													$select_a = "";
													$select_b = "Selected";
												}
											
												echo('<!-- Modal fade per modifica titoli formazione -->
													<div class="modal fade" id="modificaFormazionePostBase'.$row['Id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
													  <div class="modal-dialog modal-lg" role="document">
														<div class="modal-content">
														  <div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">Modifica titolo formazione post base</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															  <span aria-hidden="true">&times;</span>
															</button>
														  </div>
														  <div class="modal-body">			
																<form method="post" action ="modifica_formazione_post_base_query.php" >
																	<input type="hidden" value = "'.$row['Id'].'" Name = "id" />
																	<input type="hidden" value = "'.$id.'" Name = "id_utente" />
																	<div class="form-group">
																		<label><b>Nome titolo</b> </label>
																		<div class="input-group">						
																				<input type="text" class="form-control" id="nome_titolo" name="nome_titolo" aria-describedby="Nome titolo" value="'.$row['Nome_titolo'].'" placeholder="esempio: Perito ragioniere" required>
																		</div>
																	</div>
																	<div class="form-group">
																		<label><b>Luogo consegna</b> </label>
																		<div class="input-group">
																				<input type="text" class="form-control" id="luogo_consegna" name="luogo_consegna" value="'.$row['Luogo_consegna'].'" aria-describedby="Nome università, nome scuola, ecc.." placeholder="Luogo consegna (Nome università, nome scuola, ecc..)" required>
																		</div>
																	</div>
																	<div class="form-group">
																		<label><b>Comune consegna</b> </label>
																		<div class="input-group">								
																				<input type="text" class="form-control" id="comune_consegna" value="'.$row['Comune_consegna'].'" name="comune_consegna" aria-describedby="Comune consegna" required >
																		</div>
																	</div>
																	<div class="form-group">
																		<label><b>Provincia consegna</b> </label>
																		<div class="input-group">						
																				<input type="text" class="form-control" id="provincia_consegna" value="'.$row['Provincia_consegna'].'" name="provincia_consegna" aria-describedby="Provincia consegna" required >
																		</div>
																	</div>
																	<div class="form-group">
																		<label><b>Data consegna</b> </label>
																		<div class="input-group">							
																				<input type="date" class="form-control" id="data_consenga" name="data_consegna" value="'.$row['Data_rilascio'].'" aria-describedby="Data consegna" required>
																		</div>
																	</div>
																	<div class="form-group">
																		<label><b>Tipo titolo</b> </label>
																		<div class="input-group">					
																				<select class="form-control" id="tipo_titolo" name="tipo_titolo" required>
																					<option  value="Laurea specialistica" '.$select_a.'> Laurea specialistica </option>
																					<option value="Master" '.$select_b.' > Master </option>																					
																				</select>
																		</div>
																	</div>
														  </div>
														  <div class="modal-footer">		
																<input type="submit" class="btn btn-primary" value="Modifica titolo">		
																</form>
														  </div>
														</div>
													  </div>
													</div>');
													
												echo('<div class="modal fade" id="cancellaFormazionePostBase'.$row['Id'].'" tabindex="-1" role="dialog" aria-labelledby="cancellaUtente'.$row['Id'].'" aria-hidden="true">
														  <div class="modal-dialog" role="document">
															<div class="modal-content">
															  <div class="modal-header">
																<h5 class="modal-title" id="cancellaUtente'.$row['Id'].'">Conferma cancellazione titolo</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																  <span aria-hidden="true">&times;</span>
																</button>
															  </div>
															  <div class="modal-body">
																
																	<div class="row">
																		<div class="col-md-6">
																			<form method="post" action ="elimina_formazione_post_base_query.php">
																				<input type="hidden" value="'.$row['Id'].'" name="id">
																				<input type="hidden" value="'.$row['Id_utente'].'" name="id_utente">
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
			</div>
			<br />
			<div class="row border rounded p-3">

				<div class="col">
					<div class="row">
						<div class="col-4">

						</div>
						<div class="col-4 text-center">
							<h5>Provvedimenti disciplinari </h5>
						</div>
						<div class="col-4 text-right">
							<a href="#" data-toggle="modal" data-target="#aggiungi_provvedimenti"><i class="fa fa-plus"></i> &nbsp Aggiungi provv.</a>
						</div>
					</div>
					</br>
					</br>
					<div class="row">
							<table class="table table-striped">
								<tr>
									<th>
										Data
									</th>
									<th>
										Tipo provvedimento
									</th>
									<th>
										Data inizio
									</th>
									<th>
										Data fine
									</th>
									<th>
										Modifica
									</th>
									<th>
										Elimina
									</th>
								</tr>
									<?php
										$sql = "SELECT * FROM provvedimenti_disciplinari WHERE Id_utente = ".$id."";
										foreach ($dbh -> query($sql) as $row){
											echo("<tr>
													<td>
														".$row['Data']."
													</td>
													<td>
														".$row['Tipo_provvedimento']."
													</td>
													<td>
														".$row['Data_inizio']."
													</td>
													<td>
														".$row['Data_fine']."
													</td>
												
													<td class='text-center'> 
														<a href='' data-toggle='modal' data-target='#modifica_provvedimenti".$row['Id']."'> 
															<i class='fas fa-edit'> </i> 
														</a> 
													</td>
													<td class='text-center'> 
														<a href='' data-toggle='modal' data-target='#cancella_provvedimenti".$row['Id']."'> 
															<i class='fas fa-trash-alt'> </i> 
														</a> 
													</td>
														
												</tr>");
												echo('	<!-- Modal fade per modifica provvedimenti disciplinari -->
															<div class="modal fade" id="modifica_provvedimenti'.$row['Id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
															  <div class="modal-dialog modal-lg" role="document">
																<div class="modal-content">
																  <div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">Modifica provvedimento disciplinare</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	  <span aria-hidden="true">&times;</span>
																	</button>
																  </div>
																  <div class="modal-body">		
																		<form method="post" action ="modifica_provvedimento_query.php">	
																		<input type="hidden" value="'.$row['Id_utente'].'" name="id_utente">
																		<input type="hidden" value = "'.$row['Id'].'" Name = "id" />							
																			<div class="form-group">
																				<label><b>Data</b> </label>
																				<div class="input-group">						
																						<input type="date" value = "'.$row['Data'].'" class="form-control" id="data_provvedimento" name="data_provvedimento" required>
																				</div>
																			</div>
																			<div class="form-group">
																				<label><b>Tipo provvedimento</b> </label>
																				<div class="input-group">
																						<input type="text" value = "'.$row['Tipo_provvedimento'].'" class="form-control" id="tipo_provvedimento" name="tipo_provvedimento" aria-describedby="Esempio: Sospensione dal lavoro per comportamenti poco idonei ecc... " placeholder="Esempio: Sospensione dal lavoro per comportamenti poco idonei ecc..." required>
																				</div>
																			</div>
																			<div class="form-group">
																				<label><b>Data inizio</b> </label>
																				<div class="input-group">								
																						<input type="date" value="'.$row['Data_inizio'].'" class="form-control" id="data_inizio" name="data_inizio"required >
																				</div>
																			</div>
																			<div class="form-group">
																				<label><b>Data fine</b> </label>
																				<div class="input-group">						
																						<input type="date" value="'.$row['Data_fine'].'" class="form-control" id="data_fine" name="data_fine"required >
																				</div>
																			</div>	
																  </div>
																  <div class="modal-footer">		
																		<input type="submit" class="btn btn-primary" value="Modifica provvedimento">		
																		</form>
																  </div>
																</div>
															  </div>
															</div>');
															echo('<div class="modal fade" id="cancella_provvedimenti'.$row['Id'].'" tabindex="-1" role="dialog" aria-labelledby="cancellaUtente'.$row['Id'].'" aria-hidden="true">
														  <div class="modal-dialog" role="document">
															<div class="modal-content">
															  <div class="modal-header">
																<h5 class="modal-title" id="cancellaUtente'.$row['Id'].'">Conferma cancellazione provvedimento</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																  <span aria-hidden="true">&times;</span>
																</button>
															  </div>
															  <div class="modal-body">
																
																	<div class="row">
																		<div class="col-md-6">
																			<form method="post" action ="elimina_provvedimenti_query.php">
																				<input type="hidden" value="'.$row['Id'].'" name="id">
																				<input type="hidden" value="'.$row['Id_utente'].'" name="id_utente">
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
			</div>
		</div>
	</body>
	
	<!-- Modal fade per modifica dati generici -->
		<div class="modal fade" id="modifica_dati" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modifica dati generici</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">			
					<form method="post" action ="modifica_iscritto_query.php">
						<input type="hidden" value = <?php echo($id); ?> Name = 'id' />
						<div class="row">
			
				<div class="col">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-user"> </i></span>
							</div>
								<input type="text" class="form-control" id="nome" value="<?php echo($result['Nome']); ?>" aria-describedby="nome" placeholder="Nome" name="nome" required>
						</div>
					</div>
					
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
							</div>
								<input type="text" class="form-control" id="cognome" name = "cognome" value="<?php echo($result['Cognome']); ?>" aria-describedby="cognome" placeholder="Cognome" required>
						</div>
					</div>	
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker"> </i></span>
							</div>
								<input type="text" value = "<?php echo($result['Comune_nascita']); ?>" class="form-control" id="comune_nascita"  aria-describedby="comune_nascita" placeholder="Comune di nascita" name="comune_nascita" required>
						</div>
					</div>
				</div>
	
				<div class="col">
					
					
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-birthday-cake"></i></span>
							</div>
								<input type="date" class="form-control" id="datanascita" name="data_nascita" value="<?php echo($result['Data_Nascita']); ?>" aria-describedby="datanascita" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-id-card"></i></span>
							</div>
								<SELECT class="codice_fiscale" id="sesso" aria-describedby="sesso" name="sesso" required>
									<option <?php if($result['Sesso'] == "Maschio"){echo("selected='true'");} ?> value="Maschio">Maschio</option>
									<option <?php if($result['Sesso'] == "Femmina"){echo("selected='true'");} ?> value="Femmina">Femmina </option>
								</SELECT>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-flag"> </i></span>
							</div>
								<input type="text" value = "<?php echo($result['Cittadinanza']); ?>" class="form-control" id="cittadinanza"  aria-describedby="cittadinanza" placeholder="Cittadinanza"  name="cittadinanza" required>
						</div>
					</div>
					
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-id-card"></i></span>
							</div>
								<input type="text" name="codice_fiscale"  minlength="16" maxlength="16"  size="16" value = "<?php echo($result['Cod_Fiscale']); ?>" class="form-control" id="codfisc" aria-describedby="codfisc" placeholder="Codice fiscale" required>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-home"></i></span>
							</div>
								<input type="text" class="form-control" id="indirizzo" name="indirizzo" value = "<?php echo($result['Indirizzo']); ?>" aria-describedby="indirizzo" placeholder="Indirizzo" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker"></i></span>
							</div>
								<input type="number"  class="form-control" id="cap" name="cap" value ="<?php echo($result['Cap']); ?>" aria-describedby="cap" placeholder="CAP" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-location-arrow"></i></span>
							</div>
								<input type="text" class="form-control" id="citta" name="citta" value="<?php echo($result['Citta']); ?>" aria-describedby="citta" placeholder="Città" required>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-thumbtack"></i></span>
							</div>
								<input type="text" class="form-control" id="provincia" name="provincia" value="<?php echo($result['Provincia']); ?>" aria-describedby="provincia" placeholder="Provincia" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-compass"></i></span>
							</div>
								<input type="text" class="form-control" id="regione" name="regione" value="<?php echo($result['Regione']); ?>" aria-describedby="regione" placeholder="Regione" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-globe"></i></span>
							</div>
								<input type="text" class="form-control" id="nazione" name="nazione" value="<?php echo($result['Nazione']); ?>" aria-describedby="nazione" placeholder="Nazione" required>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span>
							</div>
								<input type="number" class="form-control" id="fisso" name="telefono_fisso" value="<?php echo($result['Tel_Fisso']);?>" aria-describedby="fisso" placeholder="Telefono fisso" >
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
							</div>
								<input type="email" class="form-control" id="email" name="email" value="<?php echo($result['Email']); ?>" aria-describedby="email" placeholder="Email" >
						</div>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile"></i></span>
							</div>
								<input type="number" class="form-control" id="cellulare" name="telefono_cellulare" value="<?php echo($result['Cellulare']); ?>" aria-describedby="cellulare" placeholder="Cellulare" >
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="far fa-envelope"></i></span>
							</div>
								<input type="email" class="form-control" id="pec" name="pec" value="<?php echo($result['Email']); ?>" aria-describedby="pec" placeholder="Pec" >
						</div>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col">
					<label><b>Data iscrizione all'albo</b></label>
					<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="far fa-calendar-check"></i></span>
							</div>
								<input type="date" class="form-control" id="data_iscrizione" aria-describedby="data_iscrizione" placeholder="Data iscrizione" name="data_iscrizione" value="<?php echo($result['Data_iscrizione']); ?>" >
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-users"></i></span>
							</div>
							<input type="number" class="form-control" id="numero_iscrizione" name="numero_iscrizione" aria-describedby="numero_iscrizione" placeholder="Numero iscrizione" name="numero_iscrizione" value="<?php echo($result['Numero_iscrizione']); ?>" required>
						</div>
					</div>
				</div>
			</div>
					
			  </div>
			  <div class="modal-footer">		
					<input type="submit" class="btn btn-primary" value="Modifica dati">		
					</form>
			  </div>
			</div>
		  </div>
		</div>
	
	<!-- Modal fade per inserimento titoli formazione -->
		<div class="modal fade" id="aggiungi_fomazione" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Aggiungi titolo formazione</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">			
					<form method="post" action ="aggiungi_formazione_query.php">
						<input type="hidden" value = "<?php echo($id); ?>" Name = 'id' />
						<div class="form-group">
							<label><b>Nome titolo</b> </label>
							<div class="input-group">						
									<input type="text" class="form-control" id="nome_titolo" name="nome_titolo" aria-describedby="Nome titolo" placeholder="esempio: Perito ragioniere" required>
							</div>
						</div>
						<div class="form-group">
							<label><b>Luogo consegna</b> </label>
							<div class="input-group">
									<input type="text" class="form-control" id="luogo_consegna" name="luogo_consegna" aria-describedby="Nome università, nome scuola, ecc.." placeholder="Luogo consegna (Nome università, nome scuola, ecc..)" required>
							</div>
						</div>
						<div class="form-group">
							<label><b>Comune consegna</b> </label>
							<div class="input-group">								
									<input type="text" class="form-control" id="comune_consegna" name="comune_consegna" aria-describedby="Comune consegna" required >
							</div>
						</div>
						<div class="form-group">
							<label><b>Provincia consegna</b> </label>
							<div class="input-group">						
									<input type="text" class="form-control" id="provincia_consegna" name="provincia_consegna" aria-describedby="Provincia consegna" required >
							</div>
						</div>
						<div class="form-group">
							<label><b>Data consegna</b> </label>
							<div class="input-group">							
									<input type="date" class="form-control" id="data_consenga" name="data_consegna" aria-describedby="Data consegna" required>
							</div>
						</div>
						<div class="form-group">
							<label><b>Tipo titolo</b> </label>
							<div class="input-group">					
									<select class="form-control" id="tipo_titolo" name="tipo_titolo" required>
										<option value="Diploma"> Diploma </option>
										<option value="Laurea" > Laurea </option>
										<option value="Titolo professionale"> Titolo professionale </option>
									</select>
							</div>
						</div>
			  </div>
			  <div class="modal-footer">		
					<input type="submit" class="btn btn-primary" value="Aggiungi titolo">		
					</form>
			  </div>
			</div>
		  </div>
		</div>
	
	
	<!-- Modal fade per inserimento titoli formazione post base -->
		<div class="modal fade" id="aggiungi_formazione_post_base" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Aggiungi titolo formazione post base</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
					
					<form method="post" action ="aggiungi_formazione_post_base_query.php">
						<input type="hidden" value = "<?php echo($id); ?>" Name = 'id' />					
						<div class="form-group">
							<label><b>Nome titolo</b> </label>
							<div class="input-group">						
									<input type="text" class="form-control" id="nome_titolo" name="nome_titolo" aria-describedby="Nome titolo" placeholder="esempio: Perito ragioniere" required>
							</div>
						</div>
						<div class="form-group">
							<label><b>Luogo consegna</b> </label>
							<div class="input-group">
									<input type="text" class="form-control" id="luogo_consegna" name="luogo_consegna" aria-describedby="Nome università, nome scuola, ecc.." placeholder="Luogo consegna (Nome università, nome scuola, ecc..)" required>
							</div>
						</div>
						<div class="form-group">
							<label><b>Comune consegna</b> </label>
							<div class="input-group">								
									<input type="text" class="form-control" id="comune_consegna" name="comune_consegna" aria-describedby="Comune consegna" required >
							</div>
						</div>
						<div class="form-group">
							<label><b>Provincia consegna</b> </label>
							<div class="input-group">						
									<input type="text" class="form-control" id="provincia_consegna" name="provincia_consegna" aria-describedby="Provincia consegna" required >
							</div>
						</div>
						<div class="form-group">
							<label><b>Data consegna</b> </label>
							<div class="input-group">							
									<input type="date" class="form-control" id="data_consenga" name="data_consegna" aria-describedby="Data consegna" required>
							</div>
						</div>
						<div class="form-group">
							<label><b>Tipo titolo</b> </label>
							<div class="input-group">					
									<select class="form-control" id="tipo_titolo" name="tipo_titolo" required>
										<option value="Laurea specialistica"> Laurea specialistica </option>
										<option value="Master" > Master </option>									
									</select>
							</div>
						</div>
			  </div>
			  <div class="modal-footer">		
					<input type="submit" class="btn btn-primary" value="Aggiungi titolo">		
					</form>
			  </div>
			</div>
		  </div>
		</div>
		
		<!-- Modal fade per inserimento provvedimenti disciplinari -->
		<div class="modal fade" id="aggiungi_provvedimenti" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Aggiungi provvedimento disciplinare</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">		
					<form method="post" action ="aggiungi_provvedimento_query.php">	
					<input type="hidden" value = "<?php echo($id); ?>" Name = 'id' />							
						<div class="form-group">
							<label><b>Data</b> </label>
							<div class="input-group">						
									<input type="date" class="form-control" id="data_provvedimento" name="data_provvedimento" required>
							</div>
						</div>
						<div class="form-group">
							<label><b>Tipo provvedimento</b> </label>
							<div class="input-group">
									<input type="text" class="form-control" id="tipo_provvedimento" name="tipo_provvedimento" aria-describedby="Esempio: Sospensione dal lavoro per comportamenti poco idonei ecc... " placeholder="Esempio: Sospensione dal lavoro per comportamenti poco idonei ecc..." required>
							</div>
						</div>
						<div class="form-group">
							<label><b>Data inizio</b> </label>
							<div class="input-group">								
									<input type="date" class="form-control" id="data_inizio" name="data_inizio"required >
							</div>
						</div>
						<div class="form-group">
							<label><b>Data fine</b> </label>
							<div class="input-group">						
									<input type="date" class="form-control" id="data_fine" name="data_fine"required >
							</div>
						</div>	
			  </div>
			  <div class="modal-footer">		
					<input type="submit" class="btn btn-primary" value="Aggiungi provvedimento">		
					</form>
			  </div>
			</div>
		  </div>
		</div>
		
		<!-- modal fade per l'eliminazione dell'utente -->
		<div class="modal fade" id="cancellaUtente" tabindex="-1" role="dialog" aria-labelledby="cancellaUtente" aria-hidden="true">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="cancellaUtente">Conferma cancellazione iscritto</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										  <span aria-hidden="true">&times;</span>
										</button>
									  </div>
									  <div class="modal-body">
										
											<div class="row">
												<div class="col-md-6">
													<form method="post" action ="elimina_iscritto_query.php">
														<input type="hidden" value="<?php echo($id); ?>" name="id">
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
								</div>

		<!-- modal fade per l'aggiunta del trasferimento -->
		<div class="modal fade" id="trasferisciUtente" tabindex="-1" role="dialog" aria-labelledby="trasferisciUtente" aria-hidden="true">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="cancellaUtente">Trasferisci iscritto</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										  <span aria-hidden="true">&times;</span>
										</button>
									  </div>
									  <div class="modal-body">										
													<form method="post" action ="aggiungi_trasferimento_query.php">
														<input type="hidden" value="<?php echo($id); ?>" name="id">
														<div class="form-group">
																<label><b>Tipo trasferimento</b> </label>
																<div class="input-group">
																		<SELECT name="tipo_trasferimento" >
																			<option value="2"> In uscita </option>
																			<option value="3"> In entrata </option>
																		</SELECT>
																</div>
															</div>
														<div class="form-group">
																<label><b>Collegio di partenza</b> </label>
																<div class="input-group">
																		<input type="text" class="form-control" id="collegio_partenza" name="collegio_partenza"   required>
																</div>
															</div>
															<div class="form-group">
																<label><b>Collegio di destinazione</b> </label>
																<div class="input-group">
																		<input type="text" class="form-control" id="collegio_destinazione" name="collegio_destinazione"   required>
																</div>
															</div>
															<div class="form-group">
																<label><b>Collegio di partenza</b> </label>
																<div class="input-group">
																		<input type="date" class="form-control" id="data_trasferimento" name="data_trasferimento"   required>															
																</div>
															</div>
														<div class="form-group">
															<div class="input-group">															
																	<input class="btn btn-primary form-control" type="submit" value="Trasferisci" >
															</div>
														</div>
													</form>																							
																																			
									  </div>
									</div>
								  </div>
								</div>
	<script>
			$("#codfisc").change(function(){
			var codice_attuale ="<?php echo($result['Cod_Fiscale']); ?>";
			var cod_fiscale = $("#codfisc").val();
			if(codice_attuale != cod_fiscale){
						$.ajax({type:"POST",							
						url: "controlla_codice_fiscale_ajax.php", 
						dataType: "text", 
						data:{
							
							cod_fiscale:cod_fiscale
                        },  
						success: function(result){
							if(result == 0){
								alert("Codice fiscale già presente nel database !");
								 $("#codfisc").val("");
							}
						}});
			}
		
		});
			
		
		$("#numero_iscrizione").change(function(){
			var numero_attuale = <?php echo($result["Numero_iscrizione"]); ?>;
			var numero_iscrizione = $("#numero_iscrizione").val();
			if(numero_attuale != numero_iscrizione){
				$.ajax({type:"POST",							
						url: "controlla_numero_iscrizione_ajax.php", 
						dataType: "text", 
						data:{
							
							numero_iscrizione:numero_iscrizione
                        },  
						success: function(result){
							if(result == 0){
								alert("Numero iscrizione già presente nel database !");
								 $("#numero_iscrizione").val("");
							}
						}});
			}
			
		});
	</script>
</html>
