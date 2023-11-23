<?php
    session_start();

    if(isset($_SERVER['login' && 'haslo' && 'rola' == 'root'])){
        header("Location: index.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <h1>Dodaj użytkownika</h1>
    <form action="" method="post">
    Login nowego użytkownika: <input type="text" name="new_login" maxlength="24" required><br/>
    Hasło nowego użytkownika: <input type="text" name="new_haslo" required></br>
    <input type="submit" value="Zapisz">
    </form>
    <?php
     if($_SERVER["REQUEST_METHOD"] == "POST"){
    $mysqli = mysqli_connect("localhost", "root", "", "23_11_2023");

    $new_login = $_POST["new_login"];
    $new_haslo = ($_POST["new_haslo"]);

    $zapytania = "INSERT INTO uzytkownicy VALUES ('$new_login', '$new_haslo', 'użytkownik')";
    if($mysqli->query($zapytania) === TRUE){
    echo "Dane zostały pomyślnie zapisane.";
    }else{
        echo "Błąd przy zapisywaniu danych: " . $mysqli->error;
    }
}
    ?>
</body>
</html>