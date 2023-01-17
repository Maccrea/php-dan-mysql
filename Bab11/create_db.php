<html>
<head>
<title>Menggunakan MySQL create_db</title>
</head>
<body>
<?php
	// Pengaturan
    $host		= "localhost";
	$user		= "root"; // User MySQL
	$pass		= ""; // Password MySQL
	$database	= "db_guestbook";
	
	// Perintah koneksi
	$konek = mysql_connect($host, $user, $pass) or die("Koneksi gagal dilakukan: ". mysql_error());
	$hasil = mysql_query("CREATE DATABASE $database") or die ("Perintah salah". mysql_error());
	
    if($hasil) {
		echo "Database $database telah terbuat";
	}
	else {
		echo " Gagal dalam membuat database".mysql_error();
	}
	mysql_close($konek);
?>
</body>
</html>
