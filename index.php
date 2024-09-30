<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <div class="container">
        <h1>Censura Parole</h1>
        <form action="process.php" method="POST">
            <label for="paragraph">Paragrafo:</label><br>
            <textarea id="paragraph" name="paragraph" rows="5" cols="40" required></textarea><br><br>
            
            <label for="badword">Parola da censurare:</label><br>
            <input type="text" id="badword" name="badword" required><br><br>
            
            <input type="submit" value="Invia">
        </form>
    </div>
</body>
</html>
