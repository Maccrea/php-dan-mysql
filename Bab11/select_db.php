<html>
<head>
<title>Menggunakan MySQL select_db</title>
</head>
<body>
<?php
	// Pengaturan
    $host		= "localhost";
	$user		= "root"; // User MySQL
	$pass		= ""; // Password MySQL
	$database	= "db_guestbook";
	
	// Perintah koneksi
	$konek=mysql_connect($host, $user, $pass)  or die("Koneksi gagal dilakukan: " . mysql_error());
    if(mysql_select_db($database)) {
		echo "Database $database dapat dibuka";
	}
	else {
		echo " Tidak ada database bernama $database \n".mysql_error();
	}
	mysql_close($konek);
?>
</body>
</html>
