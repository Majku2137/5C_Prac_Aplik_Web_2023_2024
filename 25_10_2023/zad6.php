<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $data = $_POST["data"];

    $cookie_value = $data;
    setcookie("urodziny", $cookie_value);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="date" name="data" required>
        <input type="submit" value="Wyślij">
    </form>
    <?php
     if(!isset($_COOKIE['urodziny']))
     {
        $data = $COOKIE["urodziny"];
        if(date("m-d") == date("m-d", strtotime($data))){
            echo  "Wszystkiego najlepszego z okazji urodzin";
        }
        else{
            echo "Dziś nie są Twoje urodziny";
        }
     }
    ?>

</body>
</html>