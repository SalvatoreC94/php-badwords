<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>PHP Badwords</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="text-center">
            <h1>Censura Parole</h1>
            <?php
            // Controlla se i dati sono stati inviati
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Recupera i dati dal modulo
                $paragraph = $_POST['paragraph'];
                $badword = $_POST['badword'];

                // Calcola la lunghezza del paragrafo
                $length = strlen($paragraph);

                // Sostituisci la parola da censurare con tre asterischi
                $censoredParagraph = str_replace($badword, '***', $paragraph);
                $censoredLength = strlen($censoredParagraph);

                // Stampa i risultati
                echo "<h2>Risultati</h2>";
                echo "<h3>Paragrafo originale:</h3>";
                echo "<p>$paragraph</p>";
                echo "<p>Numero di caratteri: $length</p>";
                
                echo "<h3>Paragrafo censurato:</h3>";
                echo "<p>$censoredParagraph</p>";
                echo "<p>Numero di caratteri: $censoredLength</p>";
                echo '<a href="" class="btn btn-secondary mt-3">Torna indietro</a>';
            } else {
                // Modulo di input
            ?>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="paragraph" class="form-label">Paragrafo:</label>
                        <textarea id="paragraph" name="paragraph" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="badword" class="form-label">Parola da censurare:</label>
                        <input type="text" id="badword" name="badword" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            <?php
            }
            ?>
        </div>
    </div>

     
</body>
</html>
