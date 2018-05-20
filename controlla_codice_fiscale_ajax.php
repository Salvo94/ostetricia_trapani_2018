<?php
include "db_connessione.php";
						$cod_fiscale = $_POST['cod_fiscale'];
						
							$sql = "SELECT  COUNT(Id) FROM utenti WHERE Cod_Fiscale = '".$cod_fiscale."'";
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