<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Krzysztof Jurkowski ">
	<title>Wyświetl dane</title>
	<link rel="stylesheet" href="style.css">
	<?php
	if (!file_exists('dane.txt')) {
		$plik = fopen('dane.txt', 'w');
		fclose($plik);
	}
	if (isset($_POST['kod']) && isset($_POST['opis']) && isset($_POST['cena'])) {
		$kod = $_POST['kod'];
		$opis = $_POST['opis'];
		$cena = $_POST['cena'];
		if ($kod == '') {
			$kod = substr($opis, 0, 3);
		}
		$kod = strtoupper($kod);
		$plik = fopen('dane.txt', 'a');
		fwrite($plik, "$kod;$opis;$cena\n");
		fclose($plik);
	}
	?>
</head>

<body>
	<h1>Wyświetl dane</h1>
	<table class="table">
		<tr>
			<th>KOD</th>
			<th>Opis</th>
			<th>Cena</th>
		</tr>
		<?php
		$plik = fopen('dane.txt', 'r');
		while (!feof($plik)) {
			$linia = fgets($plik);
			$tablica = explode(';', $linia);
			if (count($tablica) == 3) {
				echo "<tr>";
				echo "<td>$tablica[0]</td>";
				echo "<td>$tablica[1]</td>";
				echo "<td>$tablica[2]</td>";
				echo "</tr>";
			}
		}
		fclose($plik);
		?>
	</table>
	<footer class="foot">
		<form action="index.php" class="foot">
			<input type="submit" value="Strona główna">
			<input type="submit" value="Dodaj dane" formaction="form.php">
			<input type="submit" value="Pobierz plik" formaction="file.php">
		</form>
	</footer>
</body>

</html>