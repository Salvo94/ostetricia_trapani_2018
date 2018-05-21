<?php
include "db_connessione.php";
						$username = $_POST['username'];
						$password = $_POST['password'];
						 session_start();
							$sql = "SELECT  COUNT(Id) FROM admin WHERE Username = '".$username."' AND Password = '".$password."'";
							$count = $dbh -> query($sql)->fetchColumn();
							if($count > 0){
							     
								  $_SESSION['logged'] = true;
								  Header("Location: home.php");
								}
							else{
					
								$_SESSION['logged'] = false;
								include("inclusioni.php");
								echo("<div class='container'>");
									echo("<div class='row text-center'>");
										echo("<div class='col'>");
											echo("<p> Username o password errati </p> </br>");
											echo("<a href='index.php'> Ritorna alla schermata login  </a>");
										echo("</div>");
									echo("</div>");
								echo("</div>");
							}
							

						

			?>
			
			