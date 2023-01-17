<html>
<head>
<title>Form Guestbook</title>

</head>

<body>
<table width="661" border="1" align="center" cellpadding="0" cellspacing="3" bordercolor="#66FF33" >
  <tr align="left" bgcolor="#BFD0EA">
    <td height="20" colspan="2">
	 <font  size="4"> <b>Daftar Pengisian Guestbook </b></font></td>
  </tr>
  <?php
 // Konek ke MySQL
mysql_connect("localhost","root","") or die ("Tidak terhubung ke server");

// Membaca database
mysql_select_db("trik") or die ("database tidak ada");

   $minta = "SELECT * FROM guestbook ORDER BY id ";
   $eksekusi  = mysql_query($minta) or die ("Perintah salah");
   while($hasil=mysql_fetch_array($eksekusi)) {

?>
  <tr >
    <td width="19%" align="left" bgcolor="#FFFFFF"> Nama </td>
    <td width="81%" bgcolor="#FFFFFF"> <?php echo   $hasil['nama']; ?> </td>
  </tr>
  <tr >
    <td align="left" bgcolor="#FFFFFF">Email</td>
    <td bgcolor="#FFFFFF"><?php echo $hasil['email']; ?></td>
  </tr>
  <tr >
    <td align="left" bgcolor="#FFFFFF">Pesan</td>
    <td bgcolor="#FFFFFF"><?php echo  $hasil['pesan']; ?></td>
  </tr>
  <tr >
    <td align="left" bgcolor="#FFFFFF">Tanggal masuk </td>
    <td bgcolor="#FFFFFF"><?php echo  $hasil['tanggal']; ?></td>
  </tr>
  <tr >
    <td align="left" bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <?php } ?>
</table>
</body>
</html>
