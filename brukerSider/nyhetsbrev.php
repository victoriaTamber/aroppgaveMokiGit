<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>Nyhetsbrev</title>
</head>
<body>
<div id="wrapper">
  <div id="menyNavHjelpemidler">
     
     <div class="logoMOKI_img">
       <img src="../images/MOKI_logo.svg" alt="Logoen til MOKI">
       
       <div class="menyNavn">
        <h2> Moki.ub  </h2>
       </div>
     </div>

     <div class="menyTittelHjelpemidler">
       <h1>Velkommen til Mokis nyhetsbrev</h1>
       
     </div>
     
     <a href="forside.php"><button>forside</button></a>
     
  </div>


  <div class="slettNyhetBruker">
    <form action="../back/nyhetsbrevForsideSlett.php" method="GET">
    <h2>Slett bruker</h2>
      <input type="email" name="email" id="" placeholder="email">
     
      <input type="submit" value="Slett nyhetsbrev" name="slettnyhetsbrevBruker" >
      
    </form>

  </div>
 
    



</div>


<script src="../script.js"></script>
</body>
</html>

