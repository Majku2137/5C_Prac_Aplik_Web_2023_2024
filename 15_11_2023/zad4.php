<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 4</title>
</head>
<body>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "test_klasa");

        $zapytania = ('SELECT * FROM 5c');

        
		$wynik = mysqli_query($conn, $zapytania);

        while ($row = $wynik->fetch_assoc()) {
            echo "<table><tr><td>".$row["Nazwisko"]."</td><td>".$row['Imie']."</td><td>".$row['Data_urodzenia']."</td></tr></table>";
        }
    ?>
</body>
</html>