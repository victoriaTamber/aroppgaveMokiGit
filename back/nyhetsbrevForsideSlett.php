<?php

//slette nyhetsbrev bruker
session_start();
include "../db_kobling.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['email'])) {
    $email = $_GET['email'];
    $sql = "DELETE FROM nyhetsbrevkunde WHERE epost = ?";
    $stmt = mysqli_prepare($conn, $sql);


    if($stmt) { 
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
 

        if (mysqli_stmt_affected_rows($stmt) > 0) {
            // Deletion successful, redirect back to the newsletter page
            header("Location: ../brukerSider/forside.php?melding=Nyhetsbrev abonnent slettet.");
         
        } else {
            // Deletion failed, handle error
            header("Location: ../brukerSider/forside.php?error=Error deleting newsletter subscribers.");
            
        }
      // Lukk statement  
      mysqli_stmt_close($stmt);
 
    } else {
        // Invalid request, redirect to homepage or handle appropriately
        header("Location: ../brukerSider/nyhetsbrev.php"); 
        exit(); 
    }

} else {
  // Ugyldig forespørsel, omdiriger til nyhetsbrevsiden eller håndter på passende måte
  header("Location: ../brukerSider/nyhetsbrev.php");

  exit();
};



?>
