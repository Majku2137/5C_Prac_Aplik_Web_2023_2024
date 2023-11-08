
</head><!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 2</title>
</head>
<body>
    <form method="POST" action="">
        <input type="number" name="liczba" required>
        <input type="submit" value="Przelicz">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $liczba = $_POST["liczba"];
            if($liczba >= 0){
                $pierwiastek = sqrt($liczba);
                echo "<p>Pierwiastek kwadratowy z liczby $liczba wynosi: $pierwiastek</p>";
                }
                else{
                    echo "<p>Nie można obliczyć pierwiastka z liczby ujemnej.</p>";
                }
            }
    ?>
</body>
</html>
