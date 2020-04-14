<html>
	<head>
		<title>Rumus - Rumus Bangun Datar</title>
	</head>
	<body>
		<h3>Rumus - Rumus</h3>
		<br>
		<form action="hitung.php" method="POST">
			<table border="1">
				<tr>
					<td>Nilai 1</td>
					<td>
						<input type="text" name="nilai1">
					</td>
				</tr>
				<tr>
					<td>Nilai 2</td>
					<td>
						<input type="text" name="nilai2">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="radio" value="segitiga" name="rumus">Segitiga
						<input type="radio" value="ppanjang" name="rumus">Persegi Panjang
					</td>
				</tr>
			</table>
			<button type="submit">Hitung</button><button type="reset">Batal</button>
		</form>
	</body>
</html>