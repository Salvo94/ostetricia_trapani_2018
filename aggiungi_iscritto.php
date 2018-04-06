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
					<h4> Aggiungi iscritto </h4>	
					<br>
				</div>
			</div>
			<form method="post" action="aggiungi_iscritto_query.php">
			
			<div class="row">
			
				<div class="col">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-user"> </i></span>
							</div>
								<input type="text" class="form-control" id="nome"  aria-describedby="nome" placeholder="Nome" name="nome" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-id-card"></i></span>
							</div>
								<input type="text"  minlength="16" maxlength="16"  size="16" class="form-control" id="codfisc" aria-describedby="codfisc" placeholder="Codice fiscale" required>
						</div>
					</div>
				</div>
	
				<div class="col">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
							</div>
								<input type="text" class="form-control" id="cognome" aria-describedby="cognome" placeholder="Cognome" required>
						</div>
					</div>	
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-birthday-cake"></i></span>
							</div>
								<input type="date" class="form-control" id="datanascita" aria-describedby="datanascita" required>
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
								<input type="text" class="form-control" id="indirizzo" aria-describedby="indirizzo" placeholder="Indirizzo" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker"></i></span>
							</div>
								<input type="number"  class="form-control" id="cap" aria-describedby="cap" placeholder="CAP" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-location-arrow"></i></span>
							</div>
								<input type="text" class="form-control" id="citta" aria-describedby="citta" placeholder="Città" required>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-thumbtack"></i></span>
							</div>
								<input type="text" class="form-control" id="provincia" aria-describedby="provincia" placeholder="Provincia" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-compass"></i></span>
							</div>
								<input type="text" class="form-control" id="regione" aria-describedby="regione" placeholder="Regione" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-globe"></i></span>
							</div>
								<input type="text" class="form-control" id="nazione" aria-describedby="nazione" placeholder="Nazione" required>
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
								<input type="number" class="form-control" id="fisso" aria-describedby="fisso" placeholder="Telefono fisso" >
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
							</div>
								<input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email" >
						</div>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile"></i></span>
							</div>
								<input type="number" class="form-control" id="cellulare" aria-describedby="cellulare" placeholder="Cellulare" >
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="far fa-envelope"></i></span>
							</div>
								<input type="email" class="form-control" id="pec" aria-describedby="pec" placeholder="Pec" >
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col">
					<div class="form-group">
						
					</div>
				</div>
			</div>
			<br>
			<!-- <div class="row">
				<div class="col">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-camera"></i></span>
							</div>
								<input type="file"  class="form-control form-foto" id="foto" aria-describedby="foto" placeholder="Foto" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
								<button type="button" class="form-control btn-light pulsante-visualizza-foto" id="visualizza" aria-describedby="visualizza" > Visualizza foto </button>
						</div>
					</div>
				</div>
			</div> -->
			<div class="row text-center">
				<div class="col">
				
				</div>
				<div class="col">
				
				</div>
				<div class="col">
					<div class="form-group">
						<div class="input-group">
								<input type="submit" class="form-control btn btn-primary" value = "INSERISCI ISCRITTO" required>
						</div>
					</div>
				</div>
				<div class="col">
				
				</div>
				<div class="col">
				
				</div>
			</div>
			</form>
		
		</div>
		
		
	</body>
</html>
