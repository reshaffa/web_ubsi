<?php 
	if(empty($_POST['nilai1']) || empty($_POST['nilai2'])){
		$_POST['nilai1'] = 0;
		$_POST['nilai2'] = 0;	
	}elseif(!is_numeric($_POST['nilai1']) || !is_numeric($_POST['nilai2'])){
		$_POST['nilai1'] = 0;
		$_POST['nilai2'] = 0;
	}

	$lpanjang = $_POST['nilai1'] * $_POST['nilai2'];
	$lsegitiga = 1/2 * $_POST['nilai1'] * $_POST['nilai2'];
	
	if($_POST['rumus'] == 'segitiga'){
		$pilihan_rumus = "Segitiga";
		$lsegitiga = 1/2 * $_POST['nilai1'] * $_POST['nilai2'];
		$hasil = $lsegitiga;
	}else{
		$pilihan_rumus = "Persegi panjang";
		$lpanjang = $_POST['nilai1'] * $_POST['nilai2'];
		$hasil = $lpanjang;
	}
	
	echo "Hasil Hitung Rumus<br>";
	echo "Nilai 1 adalah ".$_POST['nilai1']."<br>";
	echo "Nilai 2 adalah ".$_POST['nilai2']."<br>";
	echo "Rumus yang dipilih adalah ".$pilihan_rumus."<br>";
	echo "Hasil Perhitungan Rumus adalah ".$hasil;
?>