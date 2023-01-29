<?php
// Skrip membaca komponen form
$fm_nama	= $_POST['fm_nama'];
$fm_email	= $_POST['fm_email'];
$fm_pesan	= $_POST['fm_pesan'];	

// Skrip Validasi Form
if(empty($fm_nama)) { 
	echo " Nama belum diisi, silahkan dilengkapi "; 
}
else if(empty($fm_email)) { 
	echo " Email belum diisi, silahkan dilengkapi ";
}
else if(empty($fm_pesan)) { 
	echo " Pesan harus diisi, silahkan dilengkapi"; 
} else 
{
	// Jika validasi lolos
	$tanggal = date('Y-m-d');

	// Konek ke MySQL
	mysql_connect("localhost", "root", "") or die("Tidak terhubung ke server");

	// Membaca database
	mysql_select_db("trik") or die("database tidak ada");

	// Perintah SQL menyimpan data 
	mysql_query("INSERT INTO guestbook (nama,email,pesan,tanggal)
			VALUES ('$fm_nama','$fm_email','$fm_pesan','$tanggal')");

	echo "Data telah tersimpan";

	include "tampil_guestbook.php";
}
?>