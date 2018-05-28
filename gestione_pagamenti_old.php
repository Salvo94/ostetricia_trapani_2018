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
					<h4> Gestione pagamenti </h4>
					<br>
				</div>
			</div>
			</br>
			</br>
			<div class="row">
				<div class="col text-left custom-no-padding-left">
					<b> Cataloga per anno </b> 
					<SELECT id="selezione">
						<option value="0"> Tutti gli anni </option>
						<?php
							include "db_connessione.php";
							$sql = "SELECT distinct(Anno) FROM annualita ORDER BY Anno DESC";
							foreach ($dbh -> query($sql) as $row){
								echo("<option value='".$row['Anno']."'>".$row['Anno']."</option>");
							}
						?>
					</SELECT>
				</div>
				<div class="col text-right">
					<?php
						if(isset($_GET['id'])){
							
						}else{
							echo('					<a href="gestisci_iscritto.php" data-toggle="modal" data-target="#inserisciAnnualita"> <i class="fas fa-plus"> </i> Aggiungi annualità </a> ');
						}
					?>
					
				</div>
				
			</div>
			<br>
			<div class="row">
				<table class="table table-striped">
					<tr>
						<th> N. iscrizione </th>
						<th> Nome </th>
						<th> Cognome </th>
						<th> Cod. fisc. </th>
						<th> Annualità </th>
						<th> Data pagamento </th>
						<th class="text-center"> Pagato </th>
						<th class="text-center"> Gestisci pagamento </th>
						
					</tr>
					<?php
					
						$sql = "SELECT * FROM annualita ORDER BY Anno DESC";
					
						
						foreach ($dbh -> query($sql) as $row){
							$id_annualita_corrente = $row['Id'];
							if(isset($_GET['id'])){
									$sql2 = "SELECT * FROM utenti WHERE Id=".$_GET['id']."";
							}else{
								$sql2 = "SELECT * FROM utenti";
							}
							
							foreach ($dbh -> query($sql2) as $row2){
								$id_utente_corrente = $row2['Id'];
								$sql3 = "SELECT * FROM pagamenti WHERE Id_utente =".$id_utente_corrente." AND Id_annualita = ".$id_annualita_corrente."";
								$stmt = $dbh -> prepare($sql3);
								$stmt -> execute();
								$result = $stmt->fetch(PDO::FETCH_ASSOC);
									if($result['Id'] != ""){
										echo('<tr>
												<td> '.$row2['Numero_iscrizione'].' </td>
												<td> '.$row2['Nome'].'  </td>
												<td> '.$row2['Cognome'].' </td>
												<td> '.$row2['Cod_Fiscale'].' </td>
												<td class="cataloga"> '.$row['Anno'].' </td>
												<td> '.$result['Data_pagamento'].' </td>
												<td class="text-center">  <i class="far fa-check-square text-success"> </i></td>
												<td class="text-center"> <a href="gestisci_iscritto.php" data-toggle="modal" data-target="#modifica_pagamento'.$result['Id'].'"> <i class="fas fa-edit"> </i> </a> </td>
											</tr>
											
												<!-- Modal fade per modifica pagamento -->
												<div class="modal fade" id="modifica_pagamento'.$result['Id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
												  <div class="modal-dialog" role="document">
													<div class="modal-content">
													  <div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Modifica o elimina il pagamento</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														  <span aria-hidden="true">&times;</span>
														</button>
													  </div>
													  <div class="modal-body">			
															<form method="post" action ="modifica_pagamento_query.php">
																<input type="hidden" name="id_pagamento" value="'.$result['Id'].'">
																<label> <i> *Modifica la data del pagamento </i> </label>
																<div class="form-group">
																	<div class="input-group">
																		<div class="input-group-prepend">
																			<span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
																		</div>
																	<input type="date" value="'.$result['Data_pagamento'].'" class="form-control" id="data_pagamento" name="data_pagamento" aria-describedby="data_pagamento" placeholder="Data pagamento" required>
																</div>
																</div>		
															
													  </div>
													  <div class="modal-footer">
														<div class="row">
															<div class="col-md-6">
																<input type="submit" class="btn btn-primary" value="Modifica il pagamento">
																</form>
															</div>
															<div class="col-md-6">
																<form method="post" action="elimina_pagamento_query.php">
																<input type="hidden" value="'.$result['Id'].'" name="id_pagamento" >
															<input type="submit" class="btn btn-danger" value="Elimina il pagamento"s>
																</form>
															</div>
														</div>
															
														
													  </div>
													</div>
												  </div>
												</div>
																					
											
											');
									}
									else
									{
										echo('<tr>
												<td> '.$row2['Numero_iscrizione'].' </td>
												<td> '.$row2['Nome'].'  </td>
												<td> '.$row2['Cognome'].' </td>
												<td> '.$row2['Cod_Fiscale'].' </td>
												<td class="cataloga"> '.$row['Anno'].' </td>
												<td> -  </td>
												<td class="text-center">  <i class="far fa-square text-danger"> </i></td>
												<td class="text-center"> <a href="gestisci_iscritto.php" data-toggle="modal" data-target="#aggiungiPagamento'.$id_utente_corrente.'_'.$id_annualita_corrente.'"> <i class="fas fa-edit"> </i> </a> </td>
												<!-- modal fade per inserimento pagamento-->
													<div class="modal fade" id="aggiungiPagamento'.$id_utente_corrente.'_'.$id_annualita_corrente.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
												  <div class="modal-dialog" role="document">
													<div class="modal-content">
													  <div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Conferma il pagamento</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														  <span aria-hidden="true">&times;</span>
														</button>
													  </div>
													  <div class="modal-body">			
															<form method="post" action ="aggiungi_pagamento_query.php"a>
																<input type="hidden" name="id_utente" value="'.$id_utente_corrente.'">
																<input type="hidden" name="id_annualita" value="'.$id_annualita_corrente.'">
																<label> <i> *Inserisci la data del pagamento </i> </label>
																<div class="form-group">
																	<div class="input-group">
																		<div class="input-group-prepend">
																			<span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
																		</div>
																	<input type="date" class="form-control" id="data_pagamento" name="data_pagamento" aria-describedby="data_pagamento" placeholder="Data pagamento" required>
																</div>
																</div>		
															
													  </div>
													  <div class="modal-footer">
															<input type="submit" class="btn btn-primary" value="Aggiungi il pagamento"a>
														</form>
													  </div>
													</div>
												  </div>
												</div>
											</tr>');
									}
								
							}
							
						}
						
					?>						
				</table>
					
			</div>
		</div>
		
		
		<!-- modal fade per inserimento annualità -->
			<div class="modal fade" id="inserisciAnnualita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Aggiungi annualità</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">			
					<form method="post" action ="aggiungi_quota_query.php"a>
						<label> <i> *Inserisci l'anno riferito all'annualità </i> </label>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
								</div>
							<select type="date" class="form-control" name="anno" id="anno" aria-describedby="data_pagamento" placeholder="Anno" required>
							
							</select>
						</div>
						</div>		
					
			  </div>
			  <div class="modal-footer">
					<input type="submit" id="aggiungi_annualita" class="btn btn-primary" value="Aggiungi l'annualità">
				</form>
			  </div>
			</div>
		  </div>
		</div>
		
		<script>
			$("#selezione").change(function(){
				var selezione = $("#selezione").val().trim();
				if(selezione == 0){
					$(".cataloga").each(function(){					
						$(this).parent().show();
					});
				}
				else{
					$(".cataloga").each(function(){
						var current = $(this).html().trim();
						if(current != selezione){
							$(this).parent().hide();
						}else{
							$(this).parent().show();
						}
					});
				}
				
			});
		</script>
		<script>
			var max = new Date().getFullYear()+1,
			
				min = max - 10,
				select = document.getElementById('anno');
			for (var i = max; i>=min; i--){
				var opt = document.createElement('option');
				opt.value = i;
				opt.innerHTML = i;
				select.appendChild(opt);
			}
		</script>
		<script>
			$(document).ready(function(){
			var annualita = $('#anno').val();
			
			$.ajax({type:"POST",							
						url: "controlla_annualita_ajax.php", 
						dataType: "text", 
						data:{
							annualita:annualita,
							
                        },  
						success: function(result){
							if(result==0){
								$('#aggiungi_annualita').attr("disabled","disabled");
							}
							else{
								$('#aggiungi_annualita').removeAttr("disabled");
							}
						}});
		});
		$("#anno").change(function(){
			var annualita = $('#anno').val();
			
			$.ajax({type:"POST",							
						url: "controlla_annualita_ajax.php", 
						dataType: "text", 
						data:{
							annualita:annualita,
							
                        },  
						success: function(result){
							if(result==0){
								$('#aggiungi_annualita').attr("disabled","disabled");
							}
							else{
								$('#aggiungi_annualita').removeAttr("disabled");
							}
						}});
		});
		</script>
</html>