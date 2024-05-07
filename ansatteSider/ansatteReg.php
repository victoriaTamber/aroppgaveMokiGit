<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- registrere nye ansatte -->
  <div id="wrapper"></div>
  <div class="nyBruker">
    <form action="../back/registreringAnsatte.php" method="post">
      <h2>Lag en ny bruker</h2>
      <!-- registrere navn -->
      <label>Postnummer:</label>
      <input type="text" name="postnrReg" placeholder="Postnummer"><br/>
      <label>Post sted:</label>
      <input type="text" name="poststedReg" placeholder="Post sted"><br/>

      <!-- personoplysninger -->
      <label>Fornavn: </label>
      <input type="text" name="fornavnReg" placeholder="Fornavn"><br/>
      <label>Etternavn: </label>
      <input type="text" name="etternavnReg" placeholder="Etternavn"><br/>

      <label>Kjønn: </label>
      <select id="kjonnReg" name="kjonnReg">
        <option value="mannKjonn">Mann</option>
        <option value="kvinneKjonn">Kvinne</option>
        <option value="annetKjonn">Annet</option>
      </select><br/>

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

      <!-- admin rettigheter -->
      <label for="adminRettggheter">Admin rettigheter: </label><br>
      <input type="checkbox" id="adminRettggheter" name="adminRettggheter" placeholder="Admin rettigheter"><br>

      <button type="submit" name="registrer">registrer</button><br/>
    </form>
  </div> 
</body>
</html>
