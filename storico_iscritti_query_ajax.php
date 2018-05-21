<?php
include "db_connessione.php";
						$numero_iscrizione = $_POST['numero_iscrizione'];
						$nome = $_POST['nome'];
						$cognome = $_POST['cognome'];
						$cod_fiscale = $_POST['cod_fiscale'];
						$controllo = 0;
						if($numero_iscrizione!=null){
							$numero = "AND Numero_iscrizione = ".$numero_iscrizione."";
							$controllo = $controllo +1;
						}else{
							$numero = "";
						}
						
						if(trim($nome)!=""){
							$nome_cerca = "AND Nome LIKE '%".$nome."%'";
							$controllo = $controllo +1;
						}else{
							$nome_cerca = "";
						}

						if(trim($cognome)!=""){
							$cognome_cerca = "AND Cognome LIKE '%".$cognome."%'";
							$controllo = $controllo +1;
						}else{
							$cognome_cerca = "";
						}
						if(trim($cod_fiscale)!=""){
							$codice_fiscale_cerca = "AND Cod_Fiscale LIKE '%".$cod_fiscale."%'";
							$controllo = $controllo +1;
						}else{
							$codice_fiscale_cerca = "";
						}
					
	
							$sql = "SELECT  COUNT(Id) FROM utenti WHERE Attivo >=0 ".$numero." ".$nome_cerca." ".$cognome_cerca." ".$codice_fiscale_cerca."";
							$count = $dbh -> query($sql)->fetchColumn();
							if($count > 0){
								$sql = "SELECT  * FROM utenti WHERE Attivo >=0 ".$numero." ".$nome_cerca." ".$cognome_cerca." ".$codice_fiscale_cerca." ORDER BY Cognome,Attivo ASC";
								$result = array();
									array_push($result,"<tr>
									<th> N. iscrizione </th>
									<th> Nome </th>
									<th> Cognome </th>						
									<th> Codice Fiscale </th>
									<th> Stato </th>
									<th> Data iscrizione </th>
									<th> Data cancellazione / trasferimento </th>
									<th> Ripristina </th>
								</tr>");
								foreach ($dbh -> query($sql) as $row){
									if($row['Attivo'] == 0){
										$stato = "<span class='text-danger'>Cancellato </span>";
										$ripristino = '<a href="#" data-toggle="modal" data-target="#ripristinaUtente'.$row['Id'].'" ><i class="fas fa-redo"></i></a>';
									}
									if($row['Attivo'] == 1){
										$stato = "<span class='text-success'> Iscritto </span>";
										$ripristino = "-";
									}
									if($row['Attivo'] == 2){
										$stato = "<span class='text-info'> Trasferito in uscita </span>";
										$ripristino = '<a href="#" data-toggle="modal" data-target="#ripristinaUtente'.$row['Id'].'" ><i class="fas fa-redo"></i></a>';
									}
									if($row['Attivo'] == 3){
										$stato = "<span class='text-secondary'> Trasferito in entrata </span>";
										$ripristino = '<a href="#" data-toggle="modal" data-target="#ripristinaUtente'.$row['Id'].'" ><i class="fas fa-redo"></i></a>';
									}
									
									if($row['Data_disiscrizione']=="0000-00-00"){
										$data="-";
									}
									else{
										$data = $row['Data_disiscrizione'];
									}
									$element = '<tr>
											<td> '.$row['Numero_iscrizione'].'</td>
											<td> '.$row['Nome'].'  </td>
											<td> '.$row['Cognome'].' </td>					
											<td> '.$row['Cod_Fiscale'].' </td>
											<td> '.$stato.' </td>
											<td> '.$row['Data_iscrizione'].' </td>
											<td> '.$data.' </td>
											<td class="text-center">'.$ripristino.'	 </td>
										</tr>
							
										';
										array_push($result,$element);
									$element = '			<div class="modal fade" id="ripristinaUtente'.$row['Id'].'" tabindex="-1" role="dialog" aria-labelledby="ripristinaUtente" aria-hidden="true">
												  <div class="modal-dialog" role="document">
													<div class="modal-content">
													  <div class="modal-header">
														<h5 class="modal-title" id="ripristina_utente">Conferma ripristino iscritto</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														  <span aria-hidden="true">&times;</span>
														</button>
													  </div>
													  <div class="modal-body">
														
															<div class="row">
																<div class="col-md-6">
																	<form method="post" action ="ripristina_iscritto_query.php">
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
												</div>
										';
										array_push($result,$element);
								}
							}else{
								$result ="<tr class='text-center'> <td colspan='5'><h2> Nessun iscritto trovato con questi parametri </td> </tr></h2>";
							}
							
						
						

				header('Content-Type: application/json');
				echo json_encode($result);		
?>