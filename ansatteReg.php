<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="nyBruker">
      <form action="regNyAnsatt.php" method="post">
        <h2>Lag en ny bruker</h2>
        <!-- registrere navn -->
        <label>Postnummer:</label>
        <input type="text" name="postnrReg" placeholder="Postnummer"><br/>
        <label>Post sted:</label>
        <input type="text" name="poststedReg" placeholder="Post sted"><br/>
        

        <label>Fornavn: </label>
        <input type="text" name="fornavnReg" placeholder="Fornavn"><br/>
        <label>Etternavn: </label>
        <input type="text" name="etternavnReg" placeholder="Etternavn"><br/>
        <label>Kjønn: </label>
        <input type="checkbox" name="kjonnReg" placeholder="Kjønn"><br/>
        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> I have a bike</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
        <!-- registrere inloggingen -->
        <label>Brukernavn: </label>
        <input type="text" name="brukernavnReg" placeholder="Brukernavn"><br/>
        <label>Passord: </label>
        <input type="password" name="passordReg" placeholder="Passord"><br/>
        <!-- registrere teleonnummer -->
        <label>Jobb Telefonnummer registrering: </label>
        <input type="text" name="jobbTelefonnummerReg" placeholder="Telefonnummer"><br/>
        <!-- registrere jobb epost adressen -->
        <label>Jobb epost registrering: </label>
        <input type="text" name="jobbEpostReg" placeholder="Jobb epost"><br/>
        
        <button type="submit" name="registrer">registrer</button><br/>
    
      </form>
    </div> 
</body>
</html>




<?php 

  session_start();
    include "db_kobling.php";
    
    
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