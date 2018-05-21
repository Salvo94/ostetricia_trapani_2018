<?php
	include "inclusioni.php";
	session_start();
	if(isset($_SESSION['logged'])){
		if($_SESSION["logged"] == true){
			
		}else{
			Header("Location: index.php");
		}
	}else{
		Header("Location: index.php");
	}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="home.php">Gestione albo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
	<li class="nav-item">
		<a class="nav-link" href="home.php">Dashboard </a>
	</li>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Iscritti
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="aggiungi_iscritto.php">Aggiungi iscritto</a>
          <a class="dropdown-item" href="gestisci_iscritti_lista.php">Gestisci iscritti</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="cerca_iscritti.php">Cerca iscritto</a>
		  <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="storico_iscritti.php">Storico iscritti</a>
        </div>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pagamenti
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="gestione_pagamenti.php">Gestisci pagamenti</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Trasfermimenti
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="gestione_trasferimenti.php">Visualizza trasferimenti</a>
        </div>
      </li>
     
    </ul>
	<ul class="navbar-nav mr-4 navbar-right">
		<li class="nav-item">
			<a class="text-light" href="logout.php"> <i class="fas fa-door-open"></i> &nbsp Logout </a>
		</li>
	</ul>
  </div>
</nav>