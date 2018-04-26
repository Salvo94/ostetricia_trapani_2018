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
								<input type="text"  minlength="16" maxlength="16"  size="16" class="form-control" id="codfisc" aria-describedby="codfisc" placeholder="Codice fiscale" name="codice_fiscale" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker"> </i></span>
							</div>
								<input type="text" class="form-control" id="comune_nascita"  aria-describedby="comune_nascita" placeholder="Comune di nascita" name="comune_nascita" required>
						</div>
					</div>
				</div>
	
				<div class="col">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
							</div>
								<input type="text" class="form-control" id="cognome" aria-describedby="cognome" placeholder="Cognome" name="cognome" required>
						</div>
					</div>	
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-birthday-cake"></i></span>
							</div>
								<input type="date" class="form-control" id="data_nascita" aria-describedby="data_nascita" name="data_nascita" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-flag"> </i></span>
							</div>
								<input type="text" class="form-control" id="cittadinanza"  aria-describedby="cittadinanza" placeholder="Cittadinanza"  name="cittadinanza" required>
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
								<input type="text" class="form-control" id="indirizzo" aria-describedby="indirizzo" placeholder="Indirizzo" name="indirizzo" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker"></i></span>
							</div>
								<input type="number"  class="form-control" id="cap" aria-describedby="cap" placeholder="CAP" name="cap" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-location-arrow"></i></span>
							</div>
								<input type="text" class="form-control" id="citta" aria-describedby="citta" placeholder="Città" name="citta" required>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-thumbtack"></i></span>
							</div>
								<input type="text" class="form-control" id="provincia" aria-describedby="provincia" placeholder="Provincia" name="provincia" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-compass"></i></span>
							</div>
								<input type="text" class="form-control" id="regione" aria-describedby="regione" placeholder="Regione" name="regione" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-globe"></i></span>
							</div>
								<input type="text" class="form-control" id="nazione" aria-describedby="nazione" placeholder="Nazione" name="nazione" required>
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
								<input type="number" class="form-control" id="fisso" aria-describedby="fisso" placeholder="Telefono fisso" name="telefono_fisso">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
							</div>
								<input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email" name="email" >
						</div>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile"></i></span>
							</div>
								<input type="number" class="form-control" id="cellulare" aria-describedby="cellulare" placeholder="Cellulare" name="telefono_cellulare" >
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="far fa-envelope"></i></span>
							</div>
								<input type="email" class="form-control" id="pec" aria-describedby="pec" placeholder="Pec" name="pec" >
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
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-users"></i></span>
							</div>
							<input type="number" class="form-control" id="numero_iscrizione" aria-describedby="numero_iscrizione" placeholder="Numero iscrizione" name="numero_iscrizione" required>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="row text-center">
				<div class="col">
				
				</div>
				<div class="col">
				
				</div>
				<div class="col">
					<div class="form-group">
						<div class="input-group">
								<input type="submit" class="form-control btn btn-primary" value = "INSERISCI ISCRITTO">
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
