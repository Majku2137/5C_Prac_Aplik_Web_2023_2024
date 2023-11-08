<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <input type="number" name="pl" value="Podaj kwotę" required>
        <select name="waluta">
            <option value="euro">EUR</option> 
            <option value="dolar">DOL</option> 
            <option value="frank">FRA</option> 
        </select>
        <input type="submit" value="Przelicz">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $pl = $_POST["pl"];
            $waluta = $_POST["waluta"];

            if($waluta == "euro"){
                $przelicznik_euro = $pl * 4.32;
                echo "<p>$pl zł to $przelicznik_euro EUR</p>";
            }
            elseif($waluta == "dolar"){
                $przelicznik_dolar = $pl * 3.31;
                echo "<p>$pl zł to $przelicznik_dolar DOL</p>";
            }
            elseif($waluta == "frank"){
                $przelicznik_frank = $pl * 3.98;
                echo "<p>$pl zł to $przelicznik_frank FRA</p>";
            }
        }
    ?>
</body>
</html>