<?php 
session_start();
include "db_kobling.php";


//Nyhetsbrev rgistrering 
$fornavn = ($_POST['fornavnInput']);
$etternavn = ($_POST['etternavnInput']);
//epost registrering for nye kunder
$epost = ($_POST['epostInput']);



$sql = "SET FOREIGN_KEY_CHECKS=0";
$result = mysqli_query($conn, $sql);

$sql = "INSERT INTO arsoppgaveMoki.nyhetsbrevKunde (fornavn, etternavn, epost) VALUES '$fornavn', '$etternavn', '$epost'";
$result = mysqli_query($conn, $sql)
  or die('Error querying database.');

$sql = "SELECT * FROM ansatt WHERE fornavn ='$fornavn' AND etternavn ='$etternavn' AND epost ='$epost'";
$result = mysqli_query($conn, $sql);


//slette bruker

 
?>
