<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ab86e6e481.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <title>index</title>
</head>
<body>
  <div id="wrapper">
    <!-- meny og navigasjon  -->
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
            <a id="aktiv" href="forside.php">Hjem</a>
            <a href="vartProdukt.html">Vårt produkt</a>
            <a href="omOss.html">Om oss</a>
            <a href="FAQ.html">FAQ</a>
            <a href="ansatteInnlogging.php">For ansatte</a>
          </div>  
        </div>          
    </div>




    <!-- innhold til index siden -->
      <div class="overSkr">
        <h2>Velkommen</h2>
      </div>
      <!-- Bilde av alle som jobber i Moki -->
      <div class="teamBild">
        <img src="../images/teamBilde.jpg" alt="team bilde" title="foto: Victoria">
      </div>

      <div class="innledTekst">
        <p>Moki UB er en ungdomsbedrift fra kuben VGS i Økern. Bedriften har talentfulle og engasjerte ungdommer som ønsker at verden skal være mer miljøvennlig ved å få en bedre oversikt over 
          befolkningens resirkulering. Vi bestemte oss tidlig å komme med en innovasjon. Vi startet med å komme med løsninger på hvordan vi skal få flere til å resirkulere best mulig. Som sakt er det flere i dag som 
          kjøper klokke som viser hvor mye kalorier du mister ved å løpe så mye, det er ikke bare nå, men også før. En av ansatte kommer opp med å la folket se hvor mye de kaster ved hjelp av vekt, sånn at de for en 
          oversikt over dems resirkulering. Vi ser at veldig mange nå har begynt å engasjere seg rundt klima og miljø, men likevel sliter befolkningen med å resirkulere selv om vi har fargepose for de forskjellige afallstypene. </p>
      </div>



    <!-- nyhetsbrev -->
    <div class="nyhetbrev">
      <div class="nyhetbrOskrift">
        <h3>Nyhetsbrev</h3>
      </div>
      <div class="nyhetbrTekst">
        <p>Har du lyst på å få oppdateringer på hva vi 
           gjør i MOKI og hvordan vårt produkt utvikler
           seg? Meld deg inn på vårt nyhetsbrev!</p>
      </div>
    

    <!-- abonnent innhold -->

    <div class="nyhetBInnh" >
    <form action="../back/nyhetsbrevForside.php" method="POST">
      
      <!-- navn input -->
      <div class="navnNB">
        <label for="fornavnInput">Ditt fornavn:</label>
        <input type="text" id="fornavnInput" name="fornavnInput" placeholder="Navn" required> 

        <label for="etternavnInput">Ditt etternavn:</label>
        <input type="text" id="etternavnInput" name="etternavnInput" placeholder="Etternavn" required> 
      </div>
       
      <!-- epost input --> 
      <div class="epostNB"> 
        <label for="epostInput">E-post:</label>
        <input type="email" id="epostInput" name="epostInput" placeholder="E-post" required>
      </div> 

      <div class="brukerVilkar">
        <label for="brukervilkarInput">Enig i vilkårene?</label>
        <input type="checkbox" id="brukervilkarInput" name="brukervilkarInput">
        <p>Trykk her for våre <a href="vilkar.html" target="_blank">vilkår og betingelser</a></p>
      </div>
      <!-- abonnent knappe trykk -->
      <button type="submit" id="registrAbb"> Ja takk! </button>
      
      </div>
    </form>
    <a href="loginNyhetsbrev.php"><button type="submit">Logg inn</button></a>
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
        <a href="designmanual.html">Design manual</a>
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
