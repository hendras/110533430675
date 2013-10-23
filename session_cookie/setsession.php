<!--
1.start
2.deklarasi session
3.set session jika belum ada
4.tekan refresh pada browser F5
5.cetak semua elemen session
6.finish -->
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
		<title>Set Session</title>
	</head>
	
	<body>
		<?php
		//Inisialisasi data session
		session_start();//deklarasi session
		
		//Set session jika belum ada
		if(!isset($_SESSION['test'])) {
			$_SESSION['test'] = 'value';
		} else {
			echo 'Session di-set <br />';
			//Mencetak nilai session test
			echo 'Nilai: ' . $_SESSION['test'] . '<br />';
			
			//Mencetak semua elemen session
			print_r($_SESSION);
		}
		?>
		
		<p>
		Tekan Refresh (f5).
	</body>
</html>