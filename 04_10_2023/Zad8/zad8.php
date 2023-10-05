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
        Podaj pierwszą liczbe: <input type="number" name="liczba1" required><br>
        Podaj drugą liczbe: <input type="number" name="liczba2" required><br>
        Podaj trzecią liczbe: <input type="number" name="liczba3" required><br>
        <input type="submit" value="Sprawdz">
</form>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $liczba1 = $_POST["liczba1"];
        $liczba2 = $_POST["liczba2"];
        $liczba3 = $_POST["liczba3"];
        
        if ($liczba1 == $liczba2 || $liczba1 == $liczba3 || $liczba2 == $liczba3){
            echo "Przynajmniej dwie spośród podanych liczb są takie same";
        }
        else{
            echo "Żadne z podanych liczb nie są takie same";
        }
       }
?>
</body>
</html>