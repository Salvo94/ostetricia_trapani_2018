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
					<tr>
						<td> 12345 </td>
						<td> Mario  </td>
						<td> Roaai </td>
						<td> Via Roma n.5 - 91100 - Trapani (Trapani) - Sicilia - Italia </td>
						<td> RSSMRA80A01H501U </td>
						<td class="text-center"> <a href="gestisci_iscritto.php"> <i class="fas fa-edit"> </i> </a></td>
						<td class="text-center"> <a href="gestisci_iscritto.php" data-toggle="modal" data-target="#exampleModal"> <i class="fas fa-trash-alt"> </i> </a> </td>
					</tr>
					<tr>
						<td> 12347 </td>
						<td> Giuseppe </td>
						<td> Bianchi </td>
						<td> Via Trieste n.7 - 91100 - Trapani (Trapani) - Sicilia - Italia </td>
						<td> MRRBIA80A01H501U </td>
						<td class="text-center"> <a href="gestisci_iscritto.php"> <i class="fas fa-edit"> </i> </a></td>
						<td class="text-center"> <a href="gestisci_iscritto.php" data-toggle="modal" data-target="#exampleModal"> <i class="fas fa-trash-alt"> </i> </a> </td>
					</tr>
				</table>
					
			</div>
		</div>
		
		
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Conferma cancellazione iscritto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				
					<div class="row">
						<div class="col-md-6">
							<form method="post" action ="elima_query.php"a>
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
	</body>
</html>