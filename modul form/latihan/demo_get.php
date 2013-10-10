<!DOCTYPE html>
<html>
<!-- 
Algoritma Program menganagan data melalui metode GET
 1. Start
 2. Isikan sebuah nilai
 3. Pilih tombol OK untuk men-submisi form
 4. Akan muncul variabel beserta nilai yang kita isikan tadi yaitu 'nama' akan ditampilkan pada alamat URL
 5. Finish
-->
	<head>
		<title>Metode GET</title>
	</head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="get"><!--menyatakan bahwa form akan ditangani oleh current script-->
			Nama <input type="text" name="nama" />
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_GET['nama'])){ //validasi digunakan jika terdapat masukkan nilai variabel yaitu 'nama'
				echo 'Hallo '. $_GET['nama'];
			}
		?>
	</body>
</html>