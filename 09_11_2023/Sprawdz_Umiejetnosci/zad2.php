<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad 2</title>
</head>
<body>
    <?php
        $liczba = 100;

        for( $i = 1; $i <= 10; $i++ ){
            echo"<p>Liczba $i: $liczba</p>";
            $liczba--;
        }
    ?>
</body>
</html>