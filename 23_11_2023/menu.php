<?php
    session_start();

    if(isset($_SERVER['login' && 'haslo'])){
        header("Location: index.php");
        exit();
    }

    $menu = [
        "podstrona1.php" => "Podstrona 1",
        "zmiana_hasla.php" => "Zamiana hasła",
        "wyloguj.php" => "Wyloguj się"
    ];

    if($_SESSION['rola'] == "root"){
        $menu["dodaj_uzytkownika.php"] = "Dodaj użytkownika";
        $menu["usun_uzytkowanika.php"] = "Usuń użytkownika";
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
    <h1>Menu</h1>
    <ul>
        <?php
            foreach($menu as $link => $label){
                echo "<li><a href=\"$link\">$label</a></li>";
            }
        ?>
    </ul>
</body>
</html>