<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad 1</title>
</head>
<body>
    <?php
        $liczba = 100;
        $suma = 0;
        $licznik = 0;

        while ($licznik < 100) {
            if($liczba % 2 == 0){
                $suma += $liczba;
                $licznik++;
            }
            $liczba++;
        }
        echo"<p>Suma 100 kolejnych liczb parzystych zaczynając od 100 wynosi: $suma</p>";
        
    ?>
</body>
</html>