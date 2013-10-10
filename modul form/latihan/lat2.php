<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Start
 2. Masukkan variabel bertipe text yaitu 'nama"
 3. Pilih tombol OK untuk men-submit form
 4. Akan ditampilkan hasil seperti yang dimasukan dengan mengambil suatu data pada metod POST dan pada input text berisikan masukan yang sebelumnya
 5. Finish
-->
	<head>
		<title>Prefilling Text Field</title>
	</head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post"><!--menyatakan bahwa form akan ditangani oleh current script-->
        	<!-- begitu form disubmisi, nilai elemen form akan diriset -->
			Nama <input type="text" name="nama" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : '' ?>"/>
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_POST['nama'])){ //validasi digunakan jika terdapat masukkan sebuah variabel yaitu "nama" yang diperoleh dari method POST
				echo $_POST['nama'];
			}
		?>
	</body>
</html>