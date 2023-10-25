<?php
    if(!isset($_COOKIE['hits']))
    {
        $ile = 1;
    }
    else{
        $ile = (int) $_COOKIE['hits'];
        if($ile < 1)
            $ile = 1;
            $ile++;
    }
    setcookie('hits', "$ile");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        if($ile == 1)
        $str = "raz";
        else
        $str = "razy";
        
        if($ile >= 10)
        {
            echo "Gratulację, odwiedziłeś nas już więcej niż 10 razy.";
        }
        else
        {
            echo "Odwiedziłeś nas już $ile $str.";
        }
        ?>
    </p>
</body>
</html>