<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad 4</title>
</head>
<body>
    <?php
        $liczba = 1;

        while ($liczba <= 10) {
            $pierwiastek = sqrt($liczba);
                echo"<p>Liczba $liczba: $pierwiastek</p>";
            
            $liczba++;
        }
    ?>
</body>
</html>