<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 5;
        $b = 5;

       if ($a == $b) {
        echo "Liczba $a jest równa liczbie $b";
        }
        elseif( $a >= $b ) {
        
            echo "Liczba $a jest większa od liczby $b";
        }
        else{
            echo "Liczba $a jest mniejsza od liczby $b";
        }
    ?>
</body>
</html>