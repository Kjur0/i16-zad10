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
		<input type="text" name="kod" placeholder="Kod" minlength="3" maxlength="3" class="el">
		<input type="text" name="opis" placeholder="Opis" class="el" required>
		<input type="number" name="cena" placeholder="Cena" min="0" max="1000000000" step="0.01" class="el" required>
		<input type="submit" value="Dodaj" class="el">
	</form>
	<footer class="foot">
		<a href="index.php">Strona główna</a>
	</footer>
</body>

</html>