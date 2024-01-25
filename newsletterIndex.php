<?php 
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $_fornavn = $_POST[$_fornavn],
    $_etternavn = $_POST[$_etternavn],
    $_epost = $_POST[$_epost]



    $sql = "INSERT INTO members (fornavn, etternavn, epost) VALUES ('$_fornavn', '$_etternavn', $_epost)"; 
  }
?>
