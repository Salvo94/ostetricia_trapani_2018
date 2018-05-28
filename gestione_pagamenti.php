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
				<div class="col">
					<?php
						include "db_connessione.php";
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
						<th> Ultimo pagamento </th>
						<th class="text-center"> Gestisci pagamenti/morosità </th>
						
					</tr>
					<?php
						if(isset($_GET['id'])){
								$sql = "SELECT * FROM utenti WHERE Id=".$_GET['id']."";
							}else{
								$sql = "SELECT * FROM utenti";
							}

						foreach ($dbh -> query($sql) as $row){
							$id_utente_corrente = $row['Id'];
							$data_iscrizione_corrente = $row['Data_iscrizione'];
								$sql3 = "SELECT * FROM pagamenti INNER JOIN annualita ON pagamenti.Id_annualita = annualita.Id  WHERE Id_utente =".$id_utente_corrente." ORDER BY Anno DESC limit 1";
								$stmt = $dbh -> prepare($sql3);
								$stmt -> execute();
								$result = $stmt->fetch(PDO::FETCH_ASSOC);
									if($result['Id'] != ""){
										echo('<tr>
												<td> '.$row['Numero_iscrizione'].' </td>
												<td> '.$row['Nome'].'  </td>
												<td> '.$row['Cognome'].' </td>
												<td> '.$row['Cod_Fiscale'].' </td>											
												<td> '.$result['Anno'].' </td>
												<td class="text-center"> <a href="gestione_pagamenti_iscritto.php?id='.$id_utente_corrente.'"> <i class="fas fa-edit"> </i> </a> </td>
											</tr>
											
											');
									}
									else
									{
										echo('<tr>
												<td> '.$row['Numero_iscrizione'].' </td>
												<td> '.$row['Nome'].'  </td>
												<td> '.$row['Cognome'].' </td>
												<td> '.$row['Cod_Fiscale'].' </td>
												<td> -  </td>
												<td class="text-center"> <a href="gestione_pagamenti_iscritto.php?id='.$id_utente_corrente.'" > <i class="fas fa-edit"> </i> </a> </td>
												
											</tr>');
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
					<b> Annualità inserite: </b>
					<?php
							$sql = "SELECT * FROM annualita ORDER BY Anno";
							foreach ($dbh -> query($sql) as $row){
								echo($row['Anno']. " - ");
							}
					?>
					<br>
					<br>
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