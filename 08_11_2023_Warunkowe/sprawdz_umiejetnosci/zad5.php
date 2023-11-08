<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <from method="POST" action="">
        <label>Wybierz program</label>
        <select name="program" required>
            <option value="1">Program 1</option>
            <option value="2">Program 2</option>
            <option value="3">Program 3</option>
        </select>
        <input type="submit" value="Wybierz">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $wybor = $_POST["program"];

        switch($wybor){
            case "1":
                echo"<p>program 1</p>";
                break;
            case "2":
                echo"<p>program 2</p>";
                break;
            case "3":
                echo"<p>program 3</p>";
                break;
            default:
            echo"<p>Nieprawidłowy wybór programu</p>";
        }
    }
    ?>
</body>
</html>