<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Start
 2. Masukkan variabel bertipe text yaitu 'nama'
 3. pilih tombol OK untuk men-submisi form
 4. Akan muncul variabel beserta nilai yang kita isikan tadi yaitu 'nama' akan ditampilkan pada alamat URL
 5. Finish
-->
	<head>
		<title>Metode POST</title>
	</head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post"><!--menyatakan bahwa form akan ditangani oleh current script-->
			Nama <input type="text" name="nama" />
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_POST['nama'])){ //validasi digunakan jika terdapat masukkan nilai variabel methode POST
				echo 'Hallo '. $_POST['nama'];
			}
		?>
	</body>
</html>