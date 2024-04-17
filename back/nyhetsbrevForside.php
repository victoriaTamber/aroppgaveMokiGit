<?php 
 session_start();
include "../db_kobling.php";

$fornavn = ($_POST['fornavnInput']);
$etternavn = ($_POST['etternavnInput']);
$epostN = ($_POST['epostInput']);

if(empty($fornavn)) {
  header("Location: forside.php?error=navn er påkrevd");
  exit();  
} else if (empty($etternavn)){
  header("Location: forside.php?error=etternavn er påkrevd");
  exit();
} else if (empty($epostN)){
  header("Location: forside.php?error=epost er påkrevd");
  exit();
};

$sql = "SET FOREIGN_KEY_CHECKS=0";
$result = mysqli_query($conn, $sql);

$sql = "INSERT INTO arsoppgaveMoki.nyhetsbrevkunde (fornavn, etternavn, epost) VALUES ('$fornavn', '$etternavn', '$epostN')";
$result = mysqli_query($conn, $sql) or die('Error querying database.');

header("Location: ../brukerSider/nyhetsbrev.php");
exit();

?>
