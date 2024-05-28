<?php
session_start();
include "../../db_kobling.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Validate and sanitize input data
  $poststed = $_POST['poststedReg'];
  $postnummer = $_POST['postnrReg'];
  $fornavn = $_POST['fornavnReg'];
  $etternavn = $_POST['etternavnReg'];
  $kjonn = $_POST['kjonnReg'];
  $brukernavn = $_POST['brukernavnReg'];
  $passord = $_POST['passordReg'];
  $jobbTelefonnummer = $_POST['jobbTelefonnummerReg'];
  $jobbEpost = $_POST['jobbEpostReg'];
  $adminRettigheter = isset($_POST['adminRettigheter']) ? 'Admin' : 'Ansatt';

  // Hash the password
  $hashed_password = hash("sha256", $passord);
  

  // Insert data into the databasea
  
  $sql = "INSERT INTO arsoppgavemoki.ansatt (postnummer, poststed, fornavn, etternavn, kjonn, brukernavn, passord, jobbTelefonnummer, jobbEpost, ansatt_tilgang) VALUES ('$postnummer', '$poststed', '$fornavn', '$etternavn', '$kjonn', '$brukernavn', '$hashed_password', '$jobbTelefonnummer', '$jobbEpost', '$adminRettigheter')";
  $result = mysqli_query($conn, $sql);

  // Redirect to the desired page
  header("Location: ../../ansatteSider/ansatteForside.php");
  exit();
  
  if (!$result) {
    die('Error querying database: ' . mysqli_error($conn));
  }

}
?>
