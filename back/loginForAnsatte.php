<?php 

  session_start();
    include "../db_kobling.php";

    $brukernavnAnns = $_POST["brukernavn"];
    $passordAnns = $_POST["passord"];
    $hashed_passordAnns = hash("sha256", $passordAnns);

    if (empty($brukernavnAnns)) {
      header ("Location: ansatteInnlogging.php?error=Username is required!");
      exit();
    } else if (empty($passordAnns)){
      header ("Location: ansatteInnlogging.php?error=Username is required!");
      exit();
    }

    //skjekker registrerte ansatte fra mysql
    $sql = "SELECT * FROM ansatt WHERE brukernavnAnns = '$brukernavnAnns', passordAnns = '$hashed_passordAnns'"; 
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1) {

      $row ['brukernavnAnns'] == $brukernavnAnns && $row ['passordAnns'] == $passordAnns;

    }

?>    