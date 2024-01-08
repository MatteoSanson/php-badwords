<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>Form testo da censurare</h1>
    <p>Inserisci un testo e una parola da censurare, dopodichè premi invio per vedere il risultato.</p>
    <form action="result.php" method="POST">
        <label for="testo_utente">Inserisci testo:</label><br>
        <textarea id="testo_utente" name="testo_utente" rows="4" cols="70"></textarea>
        
        <br><br>

        <label for="parola_censurata">Parola da censurare:</label>
        <input type="text" id="parola_censurata" name="parola_censurata"><br><br>

        <input type="submit" value="Invia">
    </form>
</body>
</html>