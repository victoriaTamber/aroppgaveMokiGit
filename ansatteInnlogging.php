<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>AnsatteInlogging</title>
</head>
<body>
<div id="wrapper">
     <div id="menyNav">

      <div class="logoMOKI_img">
        <img src="images/MOKI_logo.svg" alt="Logoen til MOKI">
      </div>

      <div class="menyNavn">
        <h1>Moki.ub</h1>
      </div>

    <!-- navigasjon (css og java script) -->
      <div class="nav">
        <button onclick="navFunction()" class="navKnapp">Meny</button>
          <div id="dropdown" class="navLenkerDropdown">
            <a id="aktiv" href="index.html">Hjem</a>
            <a href="sider/produkt.html">Vårt produkt</a>
            <a href="sider/omOss.html">Om oss</a>
            <a href="sider/FAQ.html">FAQ</a>
            <a href="sider/forAnns.html">For ansatte</a>
          </div>  
        </div>          
    </div>


      <!-- log in for annsatte brukernavn og passord  -->
      <div class="loginInputAnsatte">
        <form action="loginforAnsatte.php" method="post">
          <h2>Login:</h2>
          <label>Brukernavn: </label>
          <input type="text" name="brukernavn" placeholder="Brukernavn"><br/>
          <label>Passord: </label>
          <input type="password" name="passord" placeholder="Passord"><br/>
          <button type="submit" name="login">Login</button><br/>

          <div class="administratorAgreement">
          <label for="adminRettigheter">Administrator</label>
          <input type="checkbox">
        </div>
        </form>
      </div>

    </div>

    
</body>
</html>


<?php 

  session_start();
    include "db_kobling.php";
    
    
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $fornavn = $_POST[$_fornavn];
    $etternavn = $_POST[$_etternavn];
    $epost = $_POST[$_epost];



  $sql = "SELECT * FROM ansatt WHERE (fornavn, etternavn, epost) VALUES ('$fornavn', '$etternavn', '$epost')"; 
  }