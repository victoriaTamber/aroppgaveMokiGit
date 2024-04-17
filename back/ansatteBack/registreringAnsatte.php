<?php
session_start();
include "../db_kobling.php";

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
$adminRettigheter = isset($_POST['adminRettggheter']) ? 1 : 0;

// Hash the password
$hashed_password = hash("sha256", $passord);

// Insert data into the database
$sql = "INSERT INTO arsoppgavemoki.ansatteReg (postnummer, poststed, fornavn, etternavn, kjonn, brukernavn, passord, jobbTelefonnummer, jobbEpost, adminRettigheter) VALUES ('$postnummer', '$poststed', '$fornavn', '$etternavn', '$kjonn', '$brukernavn', '$hashed_password', '$jobbTelefonnummer', '$jobbEpost', '$adminRettigheter')";
$result = mysqli_query($conn, $sql);

if (!$result) {
  die('Error querying database: ' . mysqli_error($conn));
}

// Redirect to the desired page
header("Location: ../ansatteSider/ansatteForside.php");
exit();
?>
