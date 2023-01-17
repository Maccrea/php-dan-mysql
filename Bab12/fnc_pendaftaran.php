<?php
// Fungsi digunakan untuk mengecek form buku
function cek_pendaftaran() {
	global $fm_userid,$fm_password,$fm_nama,$fm_alamat,$fm_email,
		   $fm_sex,$fm_tempat,$fm_thn,$fm_bln,$fm_tgl,$fm_deskripsi;
	
	// Validasi kotak User ID
	if (trim($fm_userid)=="") {
		echo "<b>User Id harus diisi ..!</b><br><br>";
		exit();
	}
	
	// Validasi kotak Password
	if(trim($fm_password)==""){
		echo "<b>password harus diisi ..!</b><br><br>";
		exit();
	}
	
	// Validasi kotak Nama
	if (trim($fm_nama)==""){
		echo "<b>Nama anda  Belum diisi ..!</b><br><br>";
		exit();
	}
	
	// Validasi kotak alamat
	if(trim($fm_alamat)==""){
		echo "<b>Alamat belum diisi ..!</b><br><br>";
		exit();
	}
	
	// Validasi kotak tempat
	if(trim($fm_tempat)=="" ){
		echo "<b>Tempat lahir  harus diisi ..!</b><br><br>";
		exit();
	}
	
	if(trim($fm_tgl)=="") {
		echo"<b>Tanggal harus diisi </b><br><br>";
		exit();
	}
	
	if(trim($fm_bln)==""){
		echo"<b>Bulan harus diisi </b><br><br>";
		exit();
	}
	
	if(trim($fm_thn)=="") {
		echo"<b> Tahun harus diisi </b><br><br>";
		exit();
	}
	
	if(trim($fm_deskripsi)==""){
		echo "<b>Deskripsi harus diisi ..!</b><br><br>";
		exit();
	}	 
}

?>