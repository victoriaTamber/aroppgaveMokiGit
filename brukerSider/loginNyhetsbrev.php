<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginNyhetsbrev</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div id="wrapper">
    <form action="login.php" method="POST">
        <label for="fornavnNlogin">Fornavn:</label>
        <input type="text" id="fornavnNlogin" name="fornavnNlogin" required><br><br>
        
        <label for="passordNlogin">Etternavn:</label>
        <input type="text" id="passordNlogin" name="passordNlogin" required><br><br>

        <label for="emailNlogin">Epost:</label>
        <input type="email" id="emailNlogin" name="emailNlogin" required><br><br>

        <input type="submit" value="Login">
        
    </form>
<!-- tilbake til forsiden knapp -->
    <a href="forside.php"><button>Tibake til forsiden</button></a>
</div>
</body>
</html>

