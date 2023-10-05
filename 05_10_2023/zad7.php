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
        <input type="number" name="liczba2" required><br>
        
        <input type="submit" value="Sprawdz">
</form>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $liczba1 = $_POST["liczba1"];
        $liczba2 = $_POST["liczba2"];
        $sum = 0;
            
        if ($liczba1 % 2 == 0) {
            $liczba1++;
        }

    
        for ($i = $liczba1; $i <= $liczba2; $i += 2) {
            $sum += $i;
        }

        echo "Suma wynosi: $sum";

    }
?>
</body>
</html>