
</head><!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 3</title>
</head>
<body>
    <form method="POST" action="">
        <input type="number" name="liczba" required>
        <input type="submit" value="Przelicz">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $liczba = $_POST["liczba"];
            $bezwglenda = abs($liczba);
            echo "<p>Wartość bezwzględna z $liczba wynosi: $bezwglenda</p>";
        }
    ?>
</body>
</html>
