<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ab86e6e481.js" crossorigin="anonymous"></script>
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




      
      <!-- footer til sidene -->
    <div class="footer">
    <!-- kontakt epost -->
      <div class="kontakt">
        <h3>Kontakt</h3>
        <a href="mailto:">Send mail</a>
      
      </div> 
    <!-- informasjon link til designmanual -->
      <div class="inform">
        <h3>Informasjon</h3>
        <a href="sider/designMan.html">Design manual</a>
      </div>
    <!--  sosiale medier  Youtube og Instagram -->
      <div class="sosMedie">
        <h3>Følg oss</h3>
          <a href="https://www.instagram.com/moki.ub"> <i class="fa-brands fa-instagram fa-lg"></i></a>
          <a href="https://www.youtube.com/@mokiub4920"> <i class="fa-brands fa-youtube fa-lg"></i></a>
      </div>
    </div>

 </div>

<script src="../script.js"></script>
</body>
</html>





    
 