<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Start
 2. Pilih pekerjaan yang terdapat pada form
 3. Pilih tombol OK untuk men-submisi form
 4. Akan ditampilkan pekerjaan yang sudah dipilih tadi
 5. Finish
-->
	<head>
		<title>Data Seleksi</title>
	</head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post"><!--menyatakan bahwa form akan ditangani oleh current script-->
			Pekerjaan 
			<select name="job">
				<option value="Mahasiswa">Mahasiswa</option> <!--pilihan pekerjaan-->
				<option value="ABRI">ABRI</option>
				<option value="PNS">PNS</option>
				<option value="Swasta">Swasta</option>
			</select>
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_POST['job'])){ //validasi digunakan jika terdapat masukkan yang nama variablenya "job" yang didapat dari method POST
				echo $_POST['job'];
			}
		?>
	</body>
</html>