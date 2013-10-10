<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Start
 2. Pilih jenis Teh yang ada pada form
 3. Pilih tombol OK untuk men-submisi form
 4. Akan ditampilkan total harga dari teh yang sudah dipilih tadi
 5. Finish
-->
	<head>
		<title>Studi Kasus 2</title>
	</head>
	<body>
		<h1>Kasir Teh racik</h1>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			<input type="checkbox" name="ops1" value="5000" <?php if($_POST['ops1']=="5000") echo"checked"; ?> />Lemon Tea @5000
			<br />
			<input type="checkbox" name="ops2" value="6000" <?php if($_POST['ops2']=="6000") echo"checked"; ?> />Milk Tea @6000
			<br />
			<input type="submit" value="Cek Harga" />
		<?php
			$hasil = $_POST['ops1'] + $_POST['ops2']; //proses perhitungan
			echo $hasil;
		?>
			<br />
			<label>Total Biaya Yang Harus diBayar </label><input type='text' name='hasil' value='<?php echo $hasil;?>' />
			<br />
		</form>
	</body>
</html>