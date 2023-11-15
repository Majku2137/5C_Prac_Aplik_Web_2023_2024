<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1</title>
</head>
<body>
    <form action="" method="post">
        Rok urodzenia: <input type="date" name="rok_urodzenia" required>
        <br>
        Płeć: <select name="plec"required>
            <option value="Mężyczyzna">Mężyczyzna</option>
            <option value="Kobieta">Kobieta</option>
    </select></br>
    Uwagi o stronie <input type="text" name="uwagi" maxlength="100" required><br/>
    Zgoda na udział w badaniu: <input type="checkbox" value="zgoda" required></br>
    <input type="submit" value="Zapisz">
    </form>
    <?php
     if($_SERVER["REQUEST_METHOD"] == "POST"){
    $mysqli = mysqli_connect("localhost", "root", "", "formularz");

    $rok_urodzenia = $_POST["rok_urodzenia"];
    $plec = $_POST["plec"];
    $uwagi = $_POST["uwagi"];
    $zgoda = isset($_POST["zgoda"]);

    $zapytania = "INSERT INTO dane_klientow (rok_urodzenia, plec, uwagi, zgoda) VALUES ('$rok_urodzenia', '$plec', '$uwagi', '$zgoda')";
    if($mysqli->query($zapytania) === TRUE){
    echo "Dane zostały pomyślnie zapisane.";
    }else{
        echo "Błąd przy zapisywaniu danych: " . $mysqli->error;
    }
}
    ?>
</body>
</html>