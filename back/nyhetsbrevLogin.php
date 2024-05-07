<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fornavn = $_POST["fornavnNlogin"];
    $etternavn = $_POST["passordNlogin"];
    $epost = $_POST["emailNlogin"];

    // Perform login validation and authentication logic here

    // flytter over til en annen side etter login

    header("Location: nyhetsbrev.php");
    exit;
} else {
    // flyttet tilbake til forsiden
    header("Location: ../brukerSider/forside.php");
    echo "Invalid request";
    exit;
}
?>