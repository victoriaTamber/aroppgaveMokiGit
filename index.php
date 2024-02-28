<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ab86e6e481.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>index</title>
</head>
<body>
  <div id="wrapper">
    <div id="menyNav">
      <!-- meny og navigasjon  -->
      <div class="logoMOKI_img">
        <img src="images/MOKI_logo.svg" height="90px" alt="Logoen til MOKI, grønn søppelkasse">
      </div>
    
      <div class="menyNavn">
        <a href="./index.php"> <h1>Moki.ub</h1> </a>
      </div>
    
      <!-- navigasjon (css og java script) -->                                                                                                           
      <div class="nav">
        <!-- <button onclick="navFunction()" class="navKnapp">Meny</button> -->
        <button class="navKnappDropdown">Meny</button>
          <div class="navLenker">
            <a id="aktiv" href="index.php">Hjem</a>
            <a href="sider/vartProdukt.html">Vårt produkt</a>
            <a href="sider/omOss.html">Om oss</a>
            <a href="sider/FAQ.html">FAQ</a>
            <a href="ansatteInnlogging.php">For ansatte</a>
          </div>  
      </div>
      
    

      <!-- innhold til ansatte -->
      <div class="overSkr">
        <h2>Velkommen</h2>
      </div>
    

    <div class="teamBilde">
      <img src="images\teamBilde.jpg" title="Foto: Victoria" alt="Bilde av seks ansatte i ungdombedriften Moki, til venstre har vi Lavvanya med rosa sjorte, Victoria med blå genser, Una med en brun og mønstrete genser. Til høyre senter har vi Brage med en sort hettegenser og beige bukse, Brage med en svart jaguar hettejakke og helt til høyre har vi Jamal med en brun hettegenser" >
    </div>

    <!-- introduksjonst tekst -->
    <div class="hovedTekst">
      <p>Moki UB er en ungdomsbedrift fra kuben VGS i Økern. Bedriften har talentfulle og engasjerte ungdommer som ønsker at verden skal være mer miljøvennlig ved å få en bedre oversikt over 
          befolkningens resirkulering. Vi bestemte oss tidlig å komme med en innovasjon. Vi startet med å komme med løsninger på hvordan vi skal få flere til å resirkulere best mulig. Som sakt er det flere i dag som 
          kjøper klokke som viser hvor mye kalorier du mister ved å løpe så mye, det er ikke bare nå, men også før. En av ansatte kommer opp med å la folket se hvor mye de kaster ved hjelp av vekt, sånn at de for en 
          oversikt over dems resirkulering. Vi ser at veldig mange nå har begynt å engasjere seg rundt klima og miljø, men likevel sliter befolkningen med å resirkulere selv om vi har fargepose for de forskjellige afallstypene.</p>
    </div>





    <!-- nyhetsbrev -->
  <div class="nyhetsbrev">
      <div class="nyhetOverskr">
        <h3>Nyhetsbrev</h3>
      </div>

      <div class="nyhetsbrevTekst">
        <p>Har du lyst på å få oppdateringer på hva vi 
           gjør i MOKI og hvordan vårt produkt utvikler
           seg? Meld deg inn på vårt nyhetsbrev!</p>
      </div>
    
    <div class="nyhetsbrevInnhold">
        <!-- fornavn input -->
      <form action="nyhetsbrevIndex.php" method="post">
        <div class="fornavnNB">
          <label for="fornavnInput">Ditt fornavn:</label>
          <input type="text" id="fornavnInput" name="Navn" placeholder="Fornavn"> 
        </div>
        <!-- etternavn input -->
        <div class="etternavnNL">
          <label for="etternavnInput">Ditt etternavn:</label>
          <input type="text" id="etternavnInput" name="Navn" placeholder="Etternavn"> 
        </div>
       
        <!-- epost input --> 
        <div class="epostNB"> 
          <label for="epostInput">E-post:</label>
          <input type="text" id="epostInput" name="epost" placeholder="E-post">
        </div> 
      
        <div class="VilkarEnighet">
          <label for="avtalevilkar">Enig i vilkår </label>
          <input type="checkbox" id="avtalevilkar">
        </div>
        <!-- abonnent knappe trykk -->
        <button type="submit" onclick="registrNB()" id="registrAbb"> Ja takk! </button>
      </form>
   
     
    </div>   
  </div>
    




    <!-- footer -->
    <div class="footer">
    <!-- kontakt -->
      <div class="contact">
        <h3>Kontakt</h3>
        <a href="mailto:">Send mail</a>
      </div> 
    <!-- informasjon link til designmanual -->
      <div class="information">
        <h3>Informasjon</h3>
        <a href="sider/designMan.html">Design manual</a>
      </div>
    <!--  sosiale medier  Youtube og Instagram -->
      <div class="sosMedia">
        <h3>Følg oss</h3>
          <a href="https://www.instagram.com/moki.ub"> <i class="fa-brands fa-instagram fa-lg"></i></a>
          <a href="https://www.youtube.com/@mokiub4920"> <i class="fa-brands fa-youtube fa-lg"></i></a>
      </div>
    </div>  
  </div>


<script src="script.js"></script>
</body>
</html>