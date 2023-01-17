<?php
	require_once "conecsi.inc";
 	
	// Mengenali form/ membaca form
	$fm_userid	= $_POST['fm_userid'];
	$fm_passwd	= $_POST['fm_passwd'];
	
	// Perintah SQL Periksa Login 
	$sql = "SELECT user_id,password FROM data_user
			WHERE (user_id='$fm_userid'
	 		AND password=password('$fm_passwd'))";
	
	// Jika ada kesalahan perintah
	if(!$hasil=mysql_query($sql)) {
		echo "Perintah salah ". mysql_error();
	}
	
	// Jika perintah SQL tidak ada salah
	$ada_baris = mysql_num_rows($hasil);
	if($ada_baris >= 1) {
		// Jika Login ditemukan dalam database
		session_register("fm_userid");
		echo "Password diterima,<br> Anda berhak mengakses seluruh halaman ini";
		exit;
	}
	else {
		// Jika tidak menemukan login dalam database
		echo "<b>User / Password Salah !<b>";
 		include "fm_login.htm";
		exit;
	}
?>