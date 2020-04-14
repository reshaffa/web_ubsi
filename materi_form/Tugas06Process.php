<html>
	<head>
		<title>Data Registrasi</title>
	</head>
	<body>
		<?php 
			// prosess ambil  data jenis kelamin
			if($_POST['kelamin'] == 'L'){
				$kelamin = "Laki-Laki";
			}else{
				$kelamin = "Perempuan";
			}

			// PROSES PENDIDIKAN
			if($_POST['pendidikan'] == '1'){
				$pendidikan = 'S1';
			}else{
				$pendidikan = 'D3';
			}

		?>
		<h1>Data Registrasi</h1>
		<table border="1" width="40%">
			<tr>
				<td>Nama</td>
				<td><?php echo $_POST['nama'];?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><?php echo $_POST['alamat'];?></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><?php echo $_POST['tempat'];?></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><?php echo $_POST['tanggal'];?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><?php echo $kelamin;?></td>
			</tr>
			<tr>
				<td>Pendidikan</td>
				<td><?php echo $pendidikan;?></td>
			</tr>
		</table>
		<a href="Tugas06.php">Back to Home</a>
	</body>
</html>