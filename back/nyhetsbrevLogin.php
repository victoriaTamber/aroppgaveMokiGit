<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fornavn = $_POST["fornavnNlogin"];
    $etternavn = $_POST["passordNlogin"];
    $epost = $_POST["emailNlogin"];

    // Perform login validation and authentication logic here
    $sql = "SELECT * FROM nyhetsbrevkunde WHERE fornavn = ? AND etternavn = ? AND epost = ?";
    $stmt = mysqli_prepare($conn, $sql);

    // flytter over til en annen side etter login

    session_start();
    $_SESSION["epost"] = $epost;

    header("Location: nyhetsbrev.php");
    exit;
} else {
    // flyttet tilbake til forsiden
    header("Location: ../brukerSider/forside.php");
    echo "Invalid request";
    exit;
}
?>