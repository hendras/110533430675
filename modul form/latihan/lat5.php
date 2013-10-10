<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Start
 2. Pilih hobby yang terdapat pada form (hooby bisa dipilih lebih dari satu)
 3. Pilih tombol OK untuk men-submisi form
 4. Akan ditampilkan hobby yang sudah dipilih pada form
 5. Finish
-->
	<head>
		<title>Data Checkbox</title>
	</head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post"><!--menyatakan bahwa form akan ditangani oleh current script-->
			Hobby 
			<input type="checkbox" name="hobby[]" value="Membaca" /> Membaca
			<input type="checkbox" name="hobby[]" value="Olahraga" /> Olahraga
			<input type="checkbox" name="hobby[]" value="Menyanyi" /> Menyanyi
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_POST['hobby'])){ //validasi digunakan jika terdapat masukkan nilai variabel yaitu 'hooby'
				foreach($_POST['hobby'] as $key => $val) //foreach yang akan mengulang "hobby" yang sebelumnya dipilih
					echo $key . '->' . $val . '<br />';
				echo $_POST['job'];
			}
		?>
	</body>
</html>