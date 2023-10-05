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
        Podaj liczbe: <br>
        <input type="number" name="liczba1" required><br>
        <input type="submit" value="Sprawdz">
</form>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $liczba1 = $_POST["liczba1"];
        $i = 2;
            
        while($i < $liczba1){
            if ($liczba1 % $i == 0)
            {
                return false;
            }

            $i++;
            
        }

        return true;
        echo "$liczba1 jest liczbą pierwszą";

    }
?>
</body>
</html>