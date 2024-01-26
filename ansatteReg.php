<?php 

  session_start();
    include "db_kobling.php";
    
    
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $fornavn = $_POST[$_fornavn];
    $etternavn = $_POST[$_etternavn];
    $epost = $_POST[$_epost];



  $sql = "SELECT * FROM ansatt WHERE (fornavn, etternavn, epost) VALUES ('$fornavn', '$etternavn', '$epost')"; 
  }