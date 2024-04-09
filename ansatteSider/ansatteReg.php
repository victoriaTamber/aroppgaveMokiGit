<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div id="wrapper"></div>
  <div class="nyBruker">
      <form action="../back/registreringAnsatte" method="post">
        <h2>Lag en ny bruker</h2>
        <!-- registrere navn -->
        <label>Postnummer:</label>
        <input type="text" name="postnrReg" placeholder="Postnummer"><br/>
        <label>Post sted:</label>
        <input type="text" name="poststedReg" placeholder="Post sted"><br/>

        <!-- registrere nye ansatte -->
        <!-- personoplysninger -->
        <label>Fornavn: </label>
        <input type="text" name="fornavnReg" placeholder="Fornavn"><br/>
        <label>Etternavn: </label>
        <input type="text" name="etternavnReg" placeholder="Etternavn"><br/>
        <label for="kjonnReg">Kjønn: </label>
        <input type="checkbox" name="kjonnReg" placeholder="Kjønn"><br/>

        <label for="tilgang">Admin rettigheter: </label><br>
        <input type="checkbox" id="tilgang" name="adminRettggheter" placeholder="Tilgang">
  
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


