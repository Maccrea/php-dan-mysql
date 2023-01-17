<html>
<head>
<title>Menggunakan MySQL query</title>
</head>
<body>
<?php
	// Pengaturan
    $host		= "localhost";
	$user		= "root"; // User MySQL
	$pass		= ""; // Password MySQL
	$database	= "db_guestbook";
	
	// Perintah koneksi
	$konek=mysql_connect($host, $user, $pass) or die("Koneksi gagal dilakukan: " . mysql_error());
	
	// Perintah mengaktifkan nama database
    mysql_select_db($database) or die (" Database tidak ada");
	
	// Perintah menjalankan SQL
	$hasil=mysql_query("CREATE TABLE guestbook
						(id_guest INT(3) NOT NULL AUTO_INCREMENT,
						 nama VARCHAR(35) NOT NULL,
						 email VARCHAR(35) NOT NULL,
						 pesan VARCHAR(150) NOT NULL,
						 PRIMARY KEY(id_guest))") 
	or die ("Perintah salah");
	
	echo "Tabel telah terbuat";

	mysql_close($konek);
?>
</body>
</html>
