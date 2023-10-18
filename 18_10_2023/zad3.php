<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 3</title>
    <?php 
   
    ?>
</head>
<body>
    <form action="" method="post">
        ID:<input type="text" name="ID" id="ID">
        <input type="submit" value="Usuń ID z bazy danych">
        
        <?php
                $host = "localhost";
                $user = "root";
                $pass = "";
                $db = "zadanie3";

                $polaczenie = mysqli_connect($host, $user, $pass, $db);
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $ID = $_POST['ID'];

                $zapytania = "DELETE FROM zadanie3 WHERE id= $ID";
                $wynik = mysqli_query($polaczenie, $zapytania);

            }
                ?>
    </form>
    
</body>
</html>