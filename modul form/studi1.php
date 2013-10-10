<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Start
 2. Masukkan dua angka untuk dilakukan operasi
 3. Pilih operasi matematika yang ada pada form
 4. Pilih tombol OK untuk men-submisi form
 5. Hasil dari perhitungan kedua angka tersebut ditampilkan pada url 
 6. finish
-->
	<head>
		<title>Studi Kasus</title>
	</head>
	<body>
		<h1>Kalkulator</h1>
		<!-- action pada file itu sendiri yang pengiriman data melalui method POST -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			<input type="text" name="Va" placeholder="Variable a" value="<?php echo $_POST['Va']; ?>" required />
			<select name="ops">
				<option value="X" <?php if($_POST['ops']=='x') echo"selected"; ?>>*</option>
				<option value="/" <?php if($_POST['ops']=='/') echo"selected"; ?>>/</option>
				<option value="+" <?php if($_POST['ops']=='+') echo"selected"; ?>>+</option>
				<option value="-" <?php if($_POST['ops']=='-') echo"selected"; ?>>-</option>
				<option value="-" <?php if($_POST['ops']=='^') echo"selected"; ?>>^</option>
			</select>
			<input type="text" name="Vb" placeholder="Variable b" value="<?php echo $_POST['Vb']; ?>" required />
			<input type="submit" value="=" />
		<?php
			// selection "if" digunakan untuk menentukan proses yang akan dieksekusi berdasarkan $_POST['ops'] yang didapat
			if(isset($_POST['Va']) && isset($_POST['Vb'])){
				if($_POST['ops']=='x') $hasil=$_POST['Va'] * $_POST['Vb'];
				else if($_POST['ops']=='/') $hasil=$_POST['Va'] / $_POST['Vb'];
				else if($_POST['ops']=='+') $hasil=$_POST['Va'] + $_POST['Vb'];
				else if($_POST['ops']=='-') $hasil=$_POST['Va'] - $_POST['Vb'];
				else if($_POST['ops']=='^') $hasil=$_POST['Va'] ^ $_POST['Vb'];
			}
		?>
			<input type='text' name='hasil' value='<?php echo $hasil;?>' readonly />
		</form>
	</body>
</html>