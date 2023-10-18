<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1</title>
    <?php 
   
    ?>
</head>
<body>
    <form action="" method="post">
        Wiersz:<input type="text" name="wiersz" id="wiersz">
        <input type="submit" value="Dodaj wiersz">
        
        <?php
                $host = "localhost";
                $user = "root";
                $pass = "";
                $db = "zadanie1";

                $polaczenie = mysqli_connect($host, $user, $pass, $db);
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $wiersz = $_POST['wiersz'];

                $zapytania = "INSERT  INTO zadanie1 VALUES ('$wiersz');";

                

                $wynik = mysqli_query($polaczenie, $zapytania);

            }
                ?>
    </form>
    
</body>
</html>