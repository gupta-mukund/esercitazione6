<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercitazione 6</title>
</head>
<body>
    <form method="post" action="result.php">
        <label for="righe">Numero righe:</label>
        <input type="number" name="righe" id="righe">
        <label for="colonne">Numero colonne:</label>
        <input type="number" name="colonne" id="colonne">
        <label for="si">Si</label>    
        <input type="radio" name="colorato" value="true" id="si">
        <label for="no">No</label>    
        <input type="radio" name="colorato" value="false" id="no">
        <button type="submit">Genera</button>
    </form>
</body>
</html>