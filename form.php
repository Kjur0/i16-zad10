<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Krzysztof Jurkowski ">
	<title>Dodaj dane</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<h1>Dodaj dane</h1>
	<form action="table.php" method="post" class="container">
		<input type="text" name="kod" placeholder="Kod" minlength="3" maxlength="3">
		<input type="text" name="opis" placeholder="Opis" required>
		<input type="number" name="cena" placeholder="Cena" min="0" max="1000000000" step="0.01" required>
		<input type="submit" value="Dodaj">
	</form>
	<footer class="foot">
		<form action="index.php" class="foot">
			<input type="submit" value="Strona główna">
			<input type="submit" value="Wyświetl dane" formaction="table.php">
			<input type="submit" value="Pobierz plik" formaction="file.php">
		</form>
	</footer>
</body>

</html>