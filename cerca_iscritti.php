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
					<h4> Cerca iscritti </h4>
					<br>
				</div>
			</div>
			</br>
			</br>
			<div class="row">
				<table class="table table-striped">
					<tr class="text-center">
						<th colspan="4">Criteri di ricerca  </th>						
					</tr>
					<tr>
						<td><input type="number" class="form-control" id="numero_iscrizione" name="numero_iscrizione" placeholder="Numero iscrizione" required> </td>
						<td><input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required> </td>
						<td><input type="text" class="form-control" id="cognome" name="cognome" placeholder="Cognome" required> </td>
						<td><input type="text" class="form-control" id="cod_fiscale" name="cod_fiscale" minlength="16" maxlength="16" length="16" placeholder="Codice fiscale" required> </td>
					</tr>
				</table>
			</div>
			<div class="row">
				<table class="table table-striped" >
					<tbody id="risultato_ricerca">					
					</tbody>
				</table>
					
			</div>
		</div>
		
		<script>
			$("input").change(function(){
			$("#risultato_ricerca").empty();
			var numero_iscrizione = $('#numero_iscrizione').val();
			var nome  = $("#nome").val();
			var cognome = $("#cognome").val();
			var cod_fiscale = $("#cod_fiscale").val();
			$.ajax({type:"POST",							
						url: "cerca_iscritti_query_ajax.php", 
						dataType: "text", 
						data:{
							numero_iscrizione:numero_iscrizione,
							nome:nome,
							cognome:cognome,
							cod_fiscale:cod_fiscale
                        },  
						success: function(result){
							$("#risultato_ricerca").append(eval(result));
						}});
		});
		</script>
		
	</body>
</html>