<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Start
 2. Pilih jenis kelamin yang ada pada radio button
 3. Tekan tombol OK untuk men-submisi form
 4. Akan ditampilkan jenis kelamin yang dipilih pada radio button namun pilihan jenis kelamin pada pada radio button masih bertanda
 5. Finish
-->
	<head>
		<title>Prefill Data Radio Button</title>
	</head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			Jenis Kelamin 
            <!-- identifikasi akan dilakukan untuk setiap item guna mengetahui apakah item terkait dipilih atau tidak -->
			<input type="radio" name="sex" value="Pria" <?php if($_POST['sex']=='Pria')echo"checked"; ?> />Pria 
			<input type="radio" name="sex" value="Wanita" <?php if($_POST['sex']=='Wanita')echo"checked"; ?> />Wanita
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