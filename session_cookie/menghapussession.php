<<!--
1.start
2.inisilisasi data session
3.set session jika belum ada
4.tekan refresh pada browser F5
5.cetak semua elemen session
6.finish -->>
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>Hapus Session</title>
	</head>
	
	<body>
		<?php
		//Inisialisasi data session
		session_start();
		
		//Set session jika belum ada
		if(isset($_SESSION['test'])) {
			//Hapus session test
			unset($_SESSION['test']);//Session_unset(), berfungsi untuk menghapus semua variable yang terdaftar dalam session.
			
			echo 'session dihapus';
		} else {
			echo 'unset';
			
			//Mencetak semua elemen session
			print_r($_SESSION);
		}
		?>
		
		<p>
		Tekan Refresh (f5).
	</body>
</html>