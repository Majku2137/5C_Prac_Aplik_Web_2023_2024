<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 5</title>
</head>
<body>
    <form action="" method="post">
    Nazwisko:<input type="text" name="nazwisko" required><br>
    Imie:<input type="text" name="imie" maxlength="100" required><br/>
    Data urodzin: <input type="date" name="rok_urodzenia" required></br>
    <input type="submit" value="Zapisz">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $mysqli = mysqli_connect("localhost", "root", "", "test_klasa");

        $rok_urodzenia = $_POST["rok_urodzenia"];
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];

        $zapytania = "INSERT INTO 5c (Nazwisko, Imie, Data_urodzenia) VALUES ('$nazwisko', '$imie', '$rok_urodzenia')";
        if($mysqli->query($zapytania) === TRUE){
        echo "Dane zostały pomyślnie zapisane.";
        }else{
            echo "Błąd przy zapisywaniu danych: " . $mysqli->error;
        }
    }
    ?>
</body>
</html>