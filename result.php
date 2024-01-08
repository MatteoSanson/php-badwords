<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords Result</title>
</head>
<body>
    <h1>Testo censurato</h1>

    <?php
    $testo_utente = $_POST['testo_utente'];
    $parola_censurata = $_POST["parola_censurata"];
    ?>

    <h4>Testo inserito:</h4>
    <p><?php echo $testo_utente ?></p>
    <p>
        <strong>Lunghezza paragrafo: </strong>
        <?php echo strlen($testo_utente) . ' caratteri'; ?>
    </p>

    <br>
    <h4>Testo Censurato:</h4>
    <p>
        <?php 
            $testo_censurato = str_ireplace($parola_censurata, '***', $testo_utente);
            echo $testo_censurato;
        ?>
    </p>
    <p>
        <strong>Lunghezza paragrafo censurato: </strong>
        <?php echo strlen($testo_censurato) . ' caratteri'; ?>
    </p>

    
</body>
</html>
