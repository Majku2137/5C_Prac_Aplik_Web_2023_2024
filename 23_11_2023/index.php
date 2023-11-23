<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $login = $_POST["login"];
        $haslo = $_POST["haslo"];

        $connect = mysqli_connect('localhost', 'root', '', '23_11_2023');

        $zapytanie = "SELECT * FROM uzytkownicy WHERE login='$login' AND haslo ='$haslo'";

        $wynik = $connect->query($zapytanie);

        if($wynik->num_rows == 1){
            $row = $wynik->fetch_assoc();
            $_SESSION["login"] = $row["login"];
            $_SESSION["haslo"] = $row["haslo"];
            $_SESSION["rola"] = $row["rola"];
            header("Location: /5c/5C_Prac_Aplik_Web_2023_2024/23_11_2023/menu.php");
            exit();
        }else{
            $error_message = "Błędne login lub hasło";
        }
        $connect->close();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>
    <form action="" method="POST">
        Login:<input type="text" id="login"name="login" required maxlength="24">
        </br>
        Hasło:<input type="password" id="haslo"name="haslo"required maxlength="72"></br>
        <button type="submit" value="Zaloguj">Zaloguj</button>
        
        <?php 
            if(isset($error_message)){
                echo "<p style='color: red;'>$error_message</p>";
            }
        ?>
    </form>
</body>
</html>