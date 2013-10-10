<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Start
 2. Masukkan Username dan Password pada form login
 3. Pilih Button Login untuk men-submisi form
 4. pada form akan ditampilkan sebuah validasi terhadap masukan username dan password
 5. Finish
-->
	<head>
		<title>Tugas Praktikum modul form</title>
		<style>
			body{
				background-color: #c9e6f8;
			}
			.content{
				background-color: #eef7ff;
				margin: 100px auto;
				padding: 5px 20px 40px 20px;
				width: 350px;
				border: solid 3px #a4d7f5;
			}
			.min_content{
				margin: 0px auto;
				width: 250px;
			}
			.content h1{
				color: #86d5f2;
			}
			.content label{
				display:block;
			}
			.content input{
				display:block;
				margin: 5px 0 0 0;
				padding: 5px;
			}
		</style><!-- tag style digunakan untuk membuat tampilan menjadi lebih menarik -->
	</head>
	<body>
		<?php 
			if(isset($_POST['user'])&&isset($_POST['pass'])){
				if($_POST['user']=='hendra'&&$_POST['pass']=='hendra'){
					echo "
					<script>
						alert('SELAMAT DATANG');
					</script>
					";
				}else{
					echo "
					<script>
						alert('Username atau Password Salah');
					</script>
					";
				}
			}
		?>
		<form name="flogin" action="<?php $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return validateForm()">
			<div class="content">
				<div class="min_content">
					<h1>Login</h1>
				</div>
				<hr color="#a4d7f5" />
				<div class="min_content">
					<label>Username</label>
					<input type="text" name="user" id="user" autofocus />
					<label>Password</label>
					<input type="password" name="pass" />
					<input type="submit" value="Login" />
				</div>
			</div>
		</form>
        <!-- tag script dibawah digunakan untuk validasi inputan dimana bila input masih kosong dan input harus berupa huruf -->
		<script>
			function validateForm(){
				var x=document.forms["flogin"]["user"].value;
				if (x==null || x==""){
					alert("Username Masih Kosong");
					document.getElementById("hendra").focus();
				  	return false;
				}
				var y=document.forms["flogin"]["pass"].value;
				if (y==null || y==""){
					alert("Password Masih Kosong");
					document.getElementById("hendra").focus();
				  	return false;
				}
				var alphaExp = /^[a-zA-Z]+$/;
				if(x.match(alphaExp)){
					if(y.match(alphaExp)){
						return true;
					}else{
						alert("Password Harus Huruf");
						document.getElementById("hendra").focus();
						return false;
					}
				}else{
					alert("Username Harus Huruf");
					document.getElementById("hendra").focus();
					return false;
				}
			}
		</script>
	</body>
</html>