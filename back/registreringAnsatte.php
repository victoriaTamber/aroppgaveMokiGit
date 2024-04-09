<?php 

  session_start();
    include "../db_kobling.php";
    
    
    //sjekker fra funkjsjonen validate til disse tabellene
    $fornavn = ($_POST['fornavnReg']);
    $etternavn = ($_POST['etternavnReg']);
    $kjonn = ($_POST['kjonnReg']);
    //generell jobb info om den ansatt
    $jobbTelefonnummer = ($_POST['jobbTelefonnummerReg']);
    $jobbEpost = ($_POST['jobbEpostReg']);
    //brukernavn og passord for inlogging
    $brukernavn = ($_POST['brukernavnReg']);
    $passord = ($_POST['passordReg']);

    $hashed_password = hash("sha256", $passord);