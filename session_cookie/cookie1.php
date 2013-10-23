<!--
1. start
2.deklarasi cookie
3.tekan refresh pada browser
4.finish-->
<?php
//Men-set nilai cookie
setcookie('nama_cookie','nilai_cookie');
?>
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"xml:lang="en"lang="en">

<head>
<title>Set Cookie </title>
</head>
<body>
<?php
//Mendapatkan nilai cookie
echo $_COOKIE['nama_cookie'];//$_COOKIE digunakan untuk mengambil nilai dari cookie
?>
<p>
Tekan Refresh (F5);
</body>
</html>