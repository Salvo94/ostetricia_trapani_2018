<?php
include "db_connessione.php";
						$numero_iscrizione = $_POST['numero_iscrizione'];
						$nome = $_POST['nome'];
						$cognome = $_POST['cognome'];
						$cod_fiscale = $_POST['cod_fiscale'];
						$controllo = 0;
						if($numero_iscrizione!=null){
							$numero = "AND Numero_iscrizione = ".$numero_iscrizione."";
							$controllo = $controllo +1;
						}else{
							$numero = "";
						}
						
						if(trim($nome)!=""){
							$nome_cerca = "AND Nome LIKE '%".$nome."%'";
							$controllo = $controllo +1;
						}else{
							$nome_cerca = "";
						}

						if(trim($cognome)!=""){
							$cognome_cerca = "AND Cognome LIKE '%".$cognome."%'";
							$controllo = $controllo +1;
						}else{
							$cognome_cerca = "";
						}
						if(trim($cod_fiscale)!=""){
							$codice_fiscale_cerca = "AND Cod_Fiscale LIKE '%".$cod_fiscale."%'";
							$controllo = $controllo +1;
						}else{
							$codice_fiscale_cerca = "";
						}
					
	
							$sql = "SELECT  COUNT(Id) FROM utenti WHERE Attivo >=0 ".$numero." ".$nome_cerca." ".$cognome_cerca." ".$codice_fiscale_cerca."";
							$count = $dbh -> query($sql)->fetchColumn();
							if($count > 0){
								$sql = "SELECT  * FROM utenti WHERE Attivo >=0 ".$numero." ".$nome_cerca." ".$cognome_cerca." ".$codice_fiscale_cerca." ORDER BY Attivo ASC";
								$result = array();
									array_push($result,"<tr>
									<th> N. iscrizione </th>
									<th> Nome </th>
									<th> Cognome </th>						
									<th> Codice Fiscale </th>
									<th> Stato </th>
									<th> Data iscrizione </th>
									<th> Data cancellazione / trasferimento </th>
										
								</tr>");
								foreach ($dbh -> query($sql) as $row){
									if($row['Attivo'] == 0){
										$stato = "Cancellato";
									}
									if($row['Attivo'] == 1){
										$stato = "Iscritto";
									}
									if($row['Attivo'] == 2){
										$stato = "Trasferito";
									}
									
									if($row['Data_disiscrizione']=="0000-00-00"){
										$data="-";
									}
									else{
										$data = $row['Data_disiscrizione'];
									}
									$element = '<tr>
											<td> '.$row['Numero_iscrizione'].'</td>
											<td> '.$row['Nome'].'  </td>
											<td> '.$row['Cognome'].' </td>					
											<td> '.$row['Cod_Fiscale'].' </td>
											<td> '.$stato.' </td>
											<td> '.$row['Data_iscrizione'].' </td>
											<td> '.$data.' </td>
										
										
										</tr>';
										array_push($result,$element);
						
								}
							}else{
								$result ="<tr class='text-center'> <td colspan='5'><h2> Nessun iscritto trovato con questi parametri </td> </tr></h2>";
							}
							
						
						

				header('Content-Type: application/json');
				echo json_encode($result);		
?>