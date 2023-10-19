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
        Nick:<input type="text" name="Nick" id="ID" requested>
        Hasło:<input type="text" name="Haslo" id="Nazwa" requested>
        <input type="submit" value="Sprawdź" >
        
        <?php
                $host = "localhost";
                $user = "root";
                $pass = "";
                $db = "zad1_19";

                $polaczenie = mysqli_connect($host, $user, $pass, $db);
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $Nick = $_POST['Nick'];
                    $Haslo = $_POST['Haslo'];
                    

                $zapytania = "SELECT * FROM zad1_19 WHERE nick = '$Nick' AND haslo = '$Haslo';";
                $wynik = mysqli_query($polaczenie, $zapytania);

                if($wynik->num_rows > 0)
                {
                    $row = $wynik->fetch_assoc();
                    echo "<br>" . "Brawo! Udało Ci się zalogować " . $row['nick'];
                }
                else {
                    echo "<br>" ."Takie konto nie istnieje";
                }

                
            }
                ?>
    </form>
    
</body>
</html>