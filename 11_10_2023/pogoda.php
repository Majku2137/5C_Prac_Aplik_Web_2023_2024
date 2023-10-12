<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prognoza strony Wrocław </title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header>
        <div class="left">
            <img src="logo.png" alt="meteo">
        </div>
        <div class="mid">
            <h1>Prognoza dla Wrocławia</h1>
        </div>
        <div class="right">
            <p>maj, 2019 r.</p>
        </div>
    </header>
    <section>
        <div class="content">
            <table>
                <tr>
                    <th>
                        DATA
                    </th>
                    <th>
                        TEMPERATURA W NOCY
                    </th>
                    <th>
                        TEMPERATURA W DZIEŃ
                    </th>
                    <th>
                        OPADY [mm/h]
                    </th>
                    <th>
                        CIŚNIENIE [hPa]
                    </th>
                </tr>
                <?php
                

                $host = "localhost";
                $user = "root";
                $pass = "";
                $db = "prognoza";

                $polaczenie = mysqli_connect($host, $user, $pass, $db);

                $zapytania = "SELECT * FROM pogoda WHERE miasta_id = 1 ORDER BY data_prognozy ASC;";

                $wynik = mysqli_query($polaczenie, $zapytania);

                while($tab = mysqli_fetch_row($wynik)) {
                    echo "<tr><td>$tab[2]</td><td>$tab[3]</td><td>$tab[4]</td><td>$tab[5]</td><td>$tab[6]</td></tr>";
                }
                ?>
            </table>
        </div>
    </section>
    <section class="foot">
        <div class="foot-left">
            <img src="obraz.jpg" alt="Polska, Wrocław">
        </div>
        <div class="foot-right">
            <a href="kwerendy.txt" target="_blank">Pobierz kwerendy</a>
        </div>
    </section>
    <footer>
    <p>Stronę wykonał: Maksymilian Wesołowski</p>
    </footer>
</body>
</html>