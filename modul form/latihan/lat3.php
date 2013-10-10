<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Start
 2. Pilih jenis kelamin yang ada pada radio button
 3. Pilih tombol OK untuk men-submisi form
 4. Akan ditampilkan jenis kelamin yang dipilih pada radio button
 5. Finish
-->
	<head>
		<title>Data Radio Button</title>
	</head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			Jenis Kelamin <input type="radio" name="sex" value="Pria" />Pria <input type="radio" name="sex" value="Wanita" />Wanita
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_POST['sex'])){ //validasi digunakan jika terdapat masukkan yang nama variablenya "sex" yang didapat dari method POST
				echo $_POST['sex'];
			}
		?>
	</body>
</html>