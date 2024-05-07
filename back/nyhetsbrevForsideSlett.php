<?php

//slette nyhetsbrev bruker
session_start();
include "../db_kobling.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['idnyhetsbrev'])) {
    $id = $_GET['idnyhetsbrev'];

    $sql = "SELECT * FROM nyhetsbrevkunde WHERE idnyhetsbrev = ?";
    $stmt = mysqli_prepare($conn, $sql);

    $sql = "DELETE FROM nyhetsbrevkunde WHERE idnyhetsbrev = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
 

    if (mysqli_stmt_affected_rows($stmt) > 0) {
        // Deletion successful, redirect back to the newsletter page
        header("Location: ../brukerSider/forside.php");
        echo "Nyhetsbrev abonnent slettet.";
        exit();
    } else {
        // Deletion failed, handle error
        echo "Error deleting newsletter subscribers.";
    }
} else {
    // Invalid request, redirect to homepage or handle appropriately
    header("Location: ../brukerSider/forside.php");
    exit();
}




?>
