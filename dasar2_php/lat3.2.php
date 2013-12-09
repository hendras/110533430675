<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Tipe Variabel</title>
</head>

<body>

<?php 

$str = '123abc';

//casting nilai variabel $str ke integer
$bil = (int) $str; // $bil = 123

echo gettype($str);
//output : string

echo gettype($bil);
//output : integer

?> 

</body>
</html>
