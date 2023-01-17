<html>
<head>
<title>Penggunaan Fungsi</title>
</head>
<body>
Menggunakan fungsi <br>
<?php

function perkalian()
{
	global $data_a,$data_b;
	
	$hasil = $data_a * $data_b ;
	echo "$hasil";
}

$data_a=4;
$data_b=5;

echo " Prkalian dari data_a = $data_a 
      dan data_b = $data_b ";

echo " <br> Hasilnya = ";
perkalian();
?>
</body>
</html>
