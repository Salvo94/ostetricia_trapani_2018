<html>
	<head>
		<title> Gestionale albo </title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php include "inclusioni.php" ?>
		<div class = "container">
			<div class="row">
				
				<div class="col text-center">
					<br>
					<br>
					<br>
					<br>
					<img class="logo_image" src="img/logo_collegio.png">
					<br>
					<br>
					<h4> Per utilizzare il gestionale si prega di effettuare l'accesso </h4>
					
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
						Accedi
					</button>
				</div>
			</div>
			
		
		</div>
		
		
		
		
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Accesso</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				<form method="post" action ="login.php">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-user"> </i></span>
							</div>
								<input type="text" class="form-control" id="username" name="username" aria-describedby="username" placeholder="Username">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-key"> </i></span>
							</div>
							<input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
						</div>
					</div>
					
				
			  </div>
			  <div class="modal-footer">
					<input type="submit" class="btn btn-secondary" value="Accedi">
				</form>
			  </div>
			</div>
		  </div>
		</div>
	</body>
</html>