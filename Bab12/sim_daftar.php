<?php
require_once "conecsi.inc";
require_once "fnc_pendaftaran.php";
	
	// Skrip membaca komponen form
	$fm_userid	= $_POST['fm_userid'];
	$fm_password= $_POST['fm_password'];
	$fm_nama	= $_POST['fm_nama'];	
	$fm_alamat	= $_POST['fm_alamat'];
	$fm_email	= $_POST['fm_email'];
	$fm_sex		= $_POST['fm_sex'];
	$fm_tempat	= $_POST['fm_tempat'];
	$fm_thn		= $_POST['fm_thn'];
	$fm_bln		= $_POST['fm_bln'];
	$fm_tgl		= $_POST['fm_tgl'];
	$fm_deskripsi	= $_POST['fm_deskripsi'];

	// pemanggilan fungsi
	cek_pendaftaran();
						
	// Membuat data tanggal sekarang
	$tanggal	= date('Y-m-d');
	
	// Perintah SQL
	$perintahSql = "INSERT INTO data_user(
				user_id,
				password,
				nama,
				alamat,
				email,
				sex,
				tempat_lahir,
				tgl_lahir,
				deskripsi,
				date
				) 
 				VALUES (
				'$fm_userid',
				password('$fm_password'),
				'$fm_nama',	
				'$fm_alamat',
				'$fm_email',
				'$fm_sex',
				'$fm_tempat',
				'$fm_thn-$fm_bln-$fm_tgl',
				'$fm_deskripsi',
				'$tanggal'
				)
				";
	
	// Menjalankan perintah SQL		
	mysql_query($perintahSql) or die ("Ggagal SQL".mysql_error());

	echo "Data  user $fm_userid telah tersimpan";
	echo "<br> tanggal :$fm_tgl";
	echo "<br> bulan :$fm_bln";
	echo "<br> tahun :$fm_thn";
	
	include_once('fm_pendaftaran.php');
?>