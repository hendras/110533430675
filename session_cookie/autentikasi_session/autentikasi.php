<!--
1.start
2.inisialisasi session
3. set session
4.pada form masukan nama dan user name
5.login
6.akan tampil konfimasi
7.log out
8.session terhapus
9.finish-->
<?php
defined('_VALID') or die('not allowed');

function init_login() {
	//Simulasi data account nama dan password
	$nama = 'admin';
	$pass = 'admin';
	
	if(isset($_POST['nama']) && isset($_POST['pass'])) {
		$n = trim($_POST['nama']);
		$p = trim($_POST['pass']);
	
		if(($n === $nama) && ($p === $pass)) {
			//Jika sama, get session
			$_SESSION['nama'] = $n;
			
			//redirect
	?>
			<script type="text/javascript">
				document.location.href="./";
			</script>
	<?php
		} else {
			echo 'Nama/Password Tidak Sesuai';
			return false;
		}
	}
}

function validate() {
	if(!isset($_SESSION['nama'])) {
?>
	<div class="inner">
		<form action="" method="post">
			<table border=0 cellpadding=5>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" /></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="pass" /></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="LOGIN" /></td>
				</tr>
			</table>
		</form>
	</div>
<?php
	exit;
	}
	
	if(isset($_GET['m']) && $_GET['m'] == 'logout') {
		//Hapus session
		if(isset($_SESSION['nama'])) {
			unset($_SESSION['nama']);
		}
		//Redirect
?>
		<script type="text/javascript">
			document.location.href="./";
		</script>
<?php
	}
}
?>