<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Odloty samolotów</title>


	<link rel="stylesheet" href="style.css"> 
</head>

<body>
	<div class="s1">
		<h2>Odloty z lotniska</h2>
	</div>
	<div class="s2"><img src="logo.png" alt="logotyp"></div>
	<div class="main">
		<table>
			<tr>
				<th>LP.</th>
				<th>Numer Rejsu</th>
				<th>Czas</th>
				<th>Kierunek</th>
				<th>Status</th>
			</tr>
			<?php
			$polaczenie = mysqli_connect(
				'localhost',
				'root',
				'',
				'egzamin'
				);

			$zapytania = ('SELECT id, nr_rejsu, czas, kierunek, status_lotu from odloty ORDER BY czas desc');

			$wynik = mysqli_query($polaczenie, $zapytania);

			while ($row = $wynik->fetch_assoc()) {
				echo "<tr><td>".$row["id"]."</td><td>".$row['nr_rejsu']."</td><td>".$row['czas']."</td><td>".$row['kierunek']."</td><td>".$row['status_lotu']."</td></tr>";
			}
			?>
		</table>
	</div>
		<div class="left">
			<a href="samolot.png">Pobierz obraz</a>
		</div>
		<div class="mid">
				<?php
				if (isset($_COOKIE["ciasteczko"])) {
					echo "<b>Miło nam, że nas znowu odwiedziłeś</b>";
				} else {
					$cookie_name = "cookie";
					$cookie_value = "";
					$cookie_time = time() + 60*60*2;
					$cookie_path = "";
					$cookie_domain = "";
					$cookie_secure  = false;
					$cookie_httponly = false;
					setcookie($cookie_name, $cookie_value, $cookie_time, $cookie_path, $cookie_domain, $cookie_secure, $cookie_httponly);
					echo "<p>Sprawdź regulamin naszej strony!</p>";
				}
				?>
		</div>
		<div class="right">
			Autor: Maksymilian Wesołowski
		</div>
</body>

</html>



