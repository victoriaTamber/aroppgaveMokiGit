<?php 
session_start();
include "../db_kobling.php";

//Nyhetsbrev rgistrering 
 $fornavn = ($_POST['fornavnInput']);
 $etternavn = ($_POST['etternavnInput']);
//epost registrering for nye kunder
 $epost = ($_POST['epostInput']);

// //skjekker om dem har innhold eller ikke
 if(empty($fornavn)) {
   header("Location: forside.php?error=navn er påkrevd");
   exit();  
 } else if (empty($etternavn)){
   header("Location: forside.php?error=etternavn er påkrevd");
   exit();
 } else if (empty($epost)){
   header("Location: forside.php?error=epost er påkrevd");
   exit();
 };



//skjekker om tabellen er tom
$sql = "SET FOREIGN_KEY_CHECKS=0";
$result = mysqli_query($conn, $sql);

$sql = "INSERT INTO arsoppgaveMoki.nyhetsbrevkunde (fornavn, etternavn, epost) VALUES ('$fornavn', '$etternavn', '$epost')";
$result = mysqli_query($conn, $sql) or die('Error querying database.');

//$sql = "SELECT * FROM nyhetsbrevKunde WHERE fornavn = '$fornavn' AND etternavn = '$etternavn' AND epost = '$epost'";
//$result = mysqli_query($conn, $sql);



//slette bruker




// beveger seg til nyhetsbrev.php i brukerSiden
header("Location: ../brukerSider/nyhetsbrev.php");
exit();

?>
