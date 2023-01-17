<html>
<head>
<title>Menggunakan MySQL fetch_row</title>
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

    mysql_select_db($database) or die (" Database tidak ada");
	
	$perintah=mysql_query("SELECT * FROM guestbook") or die ("Perintah salah");
	while ($hasil=mysql_fetch_row($perintah)) {
		echo " Nama : $hasil[1] \n<br>";
		echo " Email: $hasil[2] \n<br>";
		echo " Pesan: $hasil[3] \n<br><br>";
	}
	mysql_close($konek);
?>
</body>
</html>
