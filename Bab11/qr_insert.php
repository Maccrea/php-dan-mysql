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
	mysql_query("INSERT INTO guestbook
						(nama, email, pesan) VALUES ('Bunafit', 'bunafit_linux@yahoo.com', 'Sangat baik situs ini')") 
					or die ("Perintah salah");
	 echo "Data berhasil disimpan";

	mysql_close($konek);
?>
</body>
</html>
