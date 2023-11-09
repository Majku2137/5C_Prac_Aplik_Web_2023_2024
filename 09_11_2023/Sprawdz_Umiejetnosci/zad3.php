<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad 3</title>
</head>
<body>
    <?php
        $liczba = 100;
        $licznik = 0;

        while ($licznik < 5) {
            if ($liczba % 5 == 0) {
                echo"<p>Liczba $licznik: $liczba</p>";
                $licznik++;
            }
            $liczba++;
        }
    ?>
</body>
</html>