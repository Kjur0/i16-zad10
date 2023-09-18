<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Krzysztof Jurkowski ">
	<title>Strona główna</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<h1 class="center">Strona główna</h1>
	<div class="container">
		<form action="form.php" method="post" class="el">
			<input type="submit" value="Dodaj dane">
		</form>
		<form action="table.php" method="post" class="el">
			<input type="submit" value="Wyświetl dane">
		</form>
		<form action="file.php" method="post" class="el">
			<input type="submit" value="Pobierz plik">
		</form>
	</div>
</body>

</html>