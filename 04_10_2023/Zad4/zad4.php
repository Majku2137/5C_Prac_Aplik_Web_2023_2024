<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Podaj liczbe</h1>
    <form method="post" action="">
        Podaj liczbe: <input type="number" name="liczba1" required><br>
        <input type="submit" value="Sprawdz">
</form>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $liczba1 = $_POST["liczba1"];
        if ($liczba1 == 0 )
        {
            echo "Podana liczba $liczba1 jest równa 0";
        }
        else if ($liczba1 >= 0 ){
            echo "Podana liczba $liczba1 jest większa od 0";
        }
        else if ($liczba1 <= 0 ){
            echo "Podana liczba $liczba1 jest mniejsza od 0";
        }
    }
?>
</body>
</html>