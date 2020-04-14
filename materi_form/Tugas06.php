<html>
	<head>
		<title>Form Registrasi</title>
	</head>
	<body>
		<h1>Form Registrasi</h1>
<pre>
<form method="POST" action="Tugas06Process.php">
Isi data di bawah ini : <br>
Nama		<input type="text" name="nama" placeholder="Isikan nama.." autofocus="true">
Alamat		<textarea name="alamat" rows="3" placeholder="Alamat anda.."></textarea>
Tempat Lahir 	<input type="text" name="tempat" placeholder="Isikan tempat lahir anda..">
Tanggal Lahir	<input type="date" name="tanggal">
Jenis Kelamin	<input type="radio" value="L" name="kelamin">Laki-Laki <input type="radio" value="P" name="kelamin">Perempuan
Pendidikan	<select name="pendidikan">
	<option value="0"> -- Pilih pendidikan --</option>
	<option value="1">S1</option>
	<option value="2">D3</option>
</select><br>
<button type="submit">Submit</button><button type="reset">Cancel</button>
</form>
</pre>
	</body>
</html>