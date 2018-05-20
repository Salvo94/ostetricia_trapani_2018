<?php
include "db_connessione.php";
						$numero_iscrizione = $_POST['numero_iscrizione'];
						
							$sql = "SELECT  COUNT(Id) FROM utenti WHERE Numero_iscrizione = '".$numero_iscrizione."'";
							$count = $dbh -> query($sql)->fetchColumn();
							if($count > 0){
							      $result = 0;
								}
							else{
								$result = 1;
							}
							
					
						

				header('Content-Type: application/json');
				echo json_encode($result);		
?>