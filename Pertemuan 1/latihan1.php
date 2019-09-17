<html>
	<head>
		<title>Belajar PHP</title>
	</head>
	<body>
		<?php
				//Fungsi Cetak & Variable
				echo "<h2 align='center'>Belajar PHP itu mudah</h2>";
				$nama = "Dede Saepulloh";
				echo "<h3>Nama Saya : $nama</h3>";
				
				//Fungsi Aritmatika
				$bil1= 2;
				$bil2= 3;
				$hasil= $bil1 + $bil2;
				echo "<h2> Hasil Penjumlahan $bil1 + $bil2 = $hasil</h2>";
				
				//Struktur Percabangan
				$nilai = 85;
				if ($nilai >= 85){
					echo "<h2>Anda Lulus</h2>";
				}else{
					echo "<h2>Anda Tidak Lulus</h2>";
				}
				
				if ($nilai >= 85 and $nilai <= 100){
					echo "<h3>Grade A</h3>";
				}else if($nilai >= 75 and $nilai <=84){
					echo "<h3>Grade B</h3>";
				}else if($nilai >= 65 and $nilai <=74){
					echo "<h3>Grade C</h3>";
				}else if($nilai >= 55 and $nilai <=64){
					echo "<h3>Grade D</h3>";
				}else{
					echo "<h3>Grade E</h3>";
				}
				
				//Struktur Pengulangan
				for ($i=1; $i <= 100; $i++){
					echo "<h3>Ini Pengulangan Ke $i</h3>";
				}
			
		?>
	</body>
</html>