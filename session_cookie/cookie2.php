<!--
1. start
2.deklarasi cookie
3.cek status cookie ada/tidak
4.tekan f5 untuk mengetahui cookie support/tidak pada browser
5.validasi
6.akan tampil kata support/tidak support
7.finish
 -->
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"xml:lang="en"lang="en">
<head>
<title>Cek Dukungan Cookie</title>
</head>
<body>
<?php
if (isset($_GET['q']) && $_GET['q']==l){ //isset untuk mengetahui apakah sebuah cookie sudah dibuat/ada.
if (isset($_COOKIE['test'])){//$_COOKIE digunakan untuk mengambil nilai dari cookie
echo'support';
}else{
echo'tidak support';
}
}else{
setcookie('test', 'value');
$self=$_SERVER['PHP_SELF'];
//REDIREKSI ke current script
header('location:'.$self.'?q=l');
exit;
}
?>
<p>
Tekan Refresh(F5);
</body>
</html>