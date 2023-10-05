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
        Podaj liczbę: <input type="number" name="liczba" required><br>
        <input type="submit" value="Sprawdz">
</form>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $liczba = $_POST["liczba"];
        if ($liczba % 2 == 0)
        {
            echo "Podana liczba $liczba jest parzysta";
        }
        else{
            echo "Podana liczba $liczba jest nieparzysta";
        }
    }
?>
</body>
</html>