<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Krzysztof Jurkowski ">
	<title>Pobierz plik</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<h1>Pobierz plik</h1>
	<div id="filecontainer">
		<?php
		if (file_exists('dane.txt')) {
			$plik = fopen('dane.txt', 'r');
			$zawartosc = str_replace("\n", "<br>", fread($plik, filesize('dane.txt')));
			fclose($plik);
			echo <<<DATA
		<a href="dane.txt" download>Pobierz plik</a><br>
		<details id="filecontent">
			<summary>Zawartość pliku</summary>
			<p>$zawartosc;</p>
		</details>
		DATA;
		} else {
			echo '<h3>Plik nie istnieje</h3>';
		}
		?>
	</div>
	<footer class="foot">
		<form action="index.php" class="foot">
			<input type="submit" value="Strona główna">
			<input type="submit" value="Dodaj dane" formaction="form.php">
			<input type="submit" value="Wyświetl dane" formaction="table.php">
		</form>
	</footer>
</body>

</html>