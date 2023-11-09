<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad 2</title>
</head>
<body>
    <?php
        $liczba = 10;
        $suma = 0;
        $licznik = 0;

        while ($suma < 1000) {
            $suma += $liczba;
            $liczba++;
            $licznik++;
        }
        echo"<p>Suma kolejnych liczb naturalnych zaczynając od 10 wynosi: $suma</p>";
        echo "<p>A liczba zsumowanych liczb to: $licznik</p>";
        
    ?>
</body>
</html>