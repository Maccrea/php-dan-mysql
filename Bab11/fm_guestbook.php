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
	
	// Mengaktifkan nama database
    mysql_select_db($database) or die (" Database tidak ada");
	
	// Mengenali/ Membaca Form
	$fm_nama	= $_POST['fm_nama'];
	$fm_email	= $_POST['fm_email'];
	$fm_pesan	= $_POST['fm_pesan'];
	
	// Perintah menjalankan SQL
	mysql_query("INSERT INTO guestbook (nama, email, pesan)
						 VALUES  ('$fm_nama', '$fm_email', '$fm_pesan')")  or die ("Perintah salah");
	
	echo "Data dengan nama $fm_nama telah tersimpan";

	mysql_close($konek);
?>
</body>
</html>
