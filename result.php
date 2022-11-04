<?php
    $colonne = $_POST["colonne"];
    $righe = $_POST["righe"];
    $colorato = $_POST["colorato"];  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella</title>
</head>
<body>
    <table>
        <?php
            $r = 255;
            $g = 255;
            $b = 255;            
            for ($i = 0; $i < $righe; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < $righe; $j++): 
                        if ($colorato == "true") {
                            $r = rand(0 , 255);
                            $g = rand(0 , 255);
                            $b = rand(0 , 255);
                        }
                    ?>
                    <td 
                        style = "background-color: rgb(<?php echo $r . ", " . $g . "," . $b ?>); font-size: 22px;"
                    >
                        <?php echo $i . "," . $j?>
                    </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor;

        ?>
    </table>
    
</body>
</html>