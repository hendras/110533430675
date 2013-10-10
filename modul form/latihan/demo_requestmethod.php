<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Start
 2. Masukkan variabel bertipe text yaitu 'nama'
 3. Pilih tombol OK untuk men-submisi form
 4. Akan tampil jenis metode yang digunakan pada pembuatan form
 5. Finish
-->
	<head>
		<title>Identifikasi Metode</title>
	</head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="get"><!--menyatakan bahwa form akan ditangani oleh current script-->
			Nama <input type="text" name="nama" />
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_REQUEST['nama'])){ //validasi digunakan jika terdapat masukkan nilai variabel methode GET
				echo 'Metode '. $_SERVER['REQUEST_METHOD'];
			}
		?>
	</body>
</html>