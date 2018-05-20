<?php
include "db_connessione.php";
						$annualita = $_POST['annualita'];
						
							$sql = "SELECT  COUNT(Id) FROM annualita WHERE Anno = '".$annualita."'";
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