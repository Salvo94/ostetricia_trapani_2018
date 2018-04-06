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
				<table class="table table-striped">
					<tr>
						<th> N. iscrizione </th>
						<th> Nome </th>
						<th> Cognome </th>
						<th> Data quota </th>
						<th> Data pagamento </th>
						<th class="text-center"> Pagato </th>
						<th class="text-center"> Gestisci pagamento </th>
					</tr>
					<tr>
						<td> 12345 </td>
						<td> Mario  </td>
						<td> Rossi </td>
						<td> 11/05/2017 </td>
						<td> 13/05/2017 </td>
						<td class="text-center">  <i class="far fa-check-square text-success"> </i></td>
						<td class="text-center"> <a href="gestisci_iscritto.php" data-toggle="modal" data-target="#modifica_pagamento"> <i class="fas fa-edit"> </i> </a> </td>
					</tr>
					<tr>
						<td> 12347 </td>
						<td> Giuseppe</td>
						<td> Bianchi </td>
						<td> 11/05/2017 </td>
						<td> -  </td>
						<td class="text-center">  <i class="far fa-square text-danger"> </i></td>
						<td class="text-center"> <a href="gestisci_iscritto.php" data-toggle="modal" data-target="#exampleModal"> <i class="fas fa-edit"> </i> </a> </td>
					</tr>
				</table>
					
			</div>
		</div>
		
		<!-- Modal fade per modifica -->
		<div class="modal fade" id="modifica_pagamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modifica o elimina il pagamento</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">			
					<form method="post" action ="modifica_pagamento_query.php"a>
						<label> <i> *Modifica la data del pagamento </i> </label>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
								</div>
							<input type="date" value="2017-05-13" class="form-control" id="data_pagamento" aria-describedby="data_pagamento" placeholder="Data pagamento" required>
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
					<input type="submit" class="btn btn-danger" value="Elimina il pagamento"s>
						</form>
					</div>
				</div>
					
				
			  </div>
			</div>
		  </div>
		</div>
		
		
		<!-- modal fade per inserimento -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
						<label> <i> *Inserisci la data del pagamento </i> </label>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
								</div>
							<input type="date" class="form-control" id="data_pagamento" aria-describedby="data_pagamento" placeholder="Data pagamento" required>
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
	</body>
</html>