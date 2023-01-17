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
	
	// Perintah koneksi
	$konek=mysql_connect($host, $user, $pass) or die("Koneksi gagal dilakukan: " . mysql_error());
    $hasil=mysql_query("SHOW DATABASES")  or die ("Perintah salah");
	 
	 $data=mysql_num_rows($hasil);
	 echo "Jumlah Database : $data";
	 
	mysql_close($konek);
?>
</body>
</html>
