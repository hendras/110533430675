<!--
1. start
2.deklarasi cookie
3.tekan refresh pada browser F5
4.cookie dihapus
4.finish-->
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"xml:lang="en"lang="en">
<head>
<title>hapus cookie</title>
</head>
<body>
<?php
setcookie('nama cookie', 'nilai_cookie');//deklarasi cookie
if(isset($_COOKIE['nama_cookie'])){//isset untuk mengetahui apakah sebuah cookie sudah dibuat/ada.
echo'cookie di-set<br/>';
//Menghapus cookie, dengan masa berlaku 3 jam yang lalu 
setcookie('nama_cookie','',time()-3*3600);
echo'cookie dihapus';
}else{
echo'unset';
}
?>
<p>
Tekan Refresh (F5);
</body>
</html>