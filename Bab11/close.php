<html>
<head>
<title>Menggunakan MySQL Connect</title>
</head>
<body>
<?php
	// Pengaturan
    $host	= "localhost";
	$user	= "root"; // User MySQL
	$pass	= ""; // Password MySQL
	
	// Perintah koneksi
	$konek	= mysql_connect($host, $user, $pass) or die("Koneksi gagal dilakukan: " . mysql_error());
	
    echo "Koneksi Sukeses";
	mysql_close($konek);
?>
</body>
</html>
