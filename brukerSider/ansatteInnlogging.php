<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>AnsatteInlogging</title>
</head>
<body>
<div id="wrapper">
     <div id="menyNav">

      <div class="logoMOKI_img">
        <img src="../images/MOKI_logo.svg" alt="Logoen til MOKI">
      </div>

      <div class="menyNavn">
        <h1>Moki.ub</h1>
      </div>

    <!-- navigasjon (css og java script) -->
      <div class="nav">
      <button onclick="navFunction()" class="navKnapp">Meny</button>
          <div id="dropdown" class="navLenkerDropdown">
            <a href="forside.php">Hjem</a>
            <a href="vartProdukt.html">Vårt produkt</a>
            <a href="omOss.html">Om oss</a>
            <a href="FAQ.html">FAQ</a>
            <a id="aktiv" href="ansatteInnlogging.php">For ansatte</a>
          </div>  
        </div>           
    </div>



      <!-- login for annsatte brukernavn og passord  -->
      <div class="loginInputAnsatte">
        <form action="../back/ansatteBack/loginForAnsatte" method="post">
          <h2>Login:</h2>
          <label>Brukernavn: </label>
          <input type="text" name="brukernavn" placeholder="Brukernavn"><br/>
          <label>Passord: </label>
          <input type="password" name="passord" placeholder="Passord"><br/>
          
          <button type="submit" class="loginAns" action="../ansatteSider/ansatteReg" name="login">Login</button><br/>

          <div class="administratorAgreement">
          <label for="adminRettigheter">Administrator</label><br>
          <input type="checkbox" value="Registrer">
        </div>
        </form>
      </div>

    </div>

<script src="../script.js"></script>
</body>
</html>





    
 