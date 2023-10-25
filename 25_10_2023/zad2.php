<?php
    $cookie_name = "username";
    $cookie_value = "Maksymilian Wesołowski";
    setcookie($cookie_name, $cookie_value);

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
</head>
<body>
    <?php
    if (!isset($_COOKIE[$cookie_name]))
    {
         echo "";
    }
    else{
        echo $_COOKIE[$cookie_name];
    }
    ?>
</body>
</html>