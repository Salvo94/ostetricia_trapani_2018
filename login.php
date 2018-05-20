<?php
include "db_connessione.php";
						$username = $_POST['username'];
						$password = $_POST['password'];
						 session_start();
							$sql = "SELECT  COUNT(Id) FROM admin WHERE Username = '".$username."' AND Password = '".$password."'";
							$count = $dbh -> query($sql)->fetchColumn();
							if($count > 0){
							     
								  $_SESSION['logged'] = true;
								}
							else{
					
								$_SESSION['logged'] = false;
							}
							
						echo($_SESSION['logged']);
						

				Header("Location: home.php");