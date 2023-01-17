
<html>
<head>
<title>Formulir Pendaftaran</title>
</head>

<body>
<form name="form1" method="post" action="sim_daftar.php">
  <table width="400" border="0" cellspacing="2" cellpadding="0">
    <tr> 
      <td colspan="2">
	  <b><font size="5">Form Pendaftaran Online</font>
	  </b></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td width="106">User Id</td>
      <td width="294">
	  <input name="fm_userid" type="text" id="fm_userid" size="25" maxlength="25">
	  </td>
    </tr>
    <tr> 
      <td>Password</td>
      <td>
	  <input name="fm_password" type="password" id="fm_password" size="25" maxlength="25">
	  </td>
    </tr>
    <tr> 
      <td height="20">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Nama</td>
      <td>
	  <input name="fm_nama" type="text" id="fm_nama" size="35" maxlength="40">
	  </td>
    </tr>
    <tr> 
      <td>Alamat</td>
      <td>
	  <input name="fm_alamat" type="text" id="fm_alamat" size="35" maxlength="60">
	  </td>
    </tr>
    <tr> 
      <td>E-mail</td>
      <td>
	  <input name="fm_email" type="text" id="fm_email" size="25" maxlength="35">
	  </td>
    </tr>
    <tr> 
      <td>Sex</td>
      <td><input name="fm_sex" type="radio" value="P" checked>
        Pria 
        <input type="radio" name="fm_sex" value="W">
        Wanita</td>
    </tr>
    <tr>
      <td>Tempat Lahir</td>
      <td>
	  <input name="fm_tempat" type="text" id="fm_tempat" size="35" maxlength="50">
	  </td>
    </tr>
    <tr> 
      <td>Tgl Lahir</td>
      <td>
	  <select name="fm_tgl" id="fm_tgl">
          <option value="tgl">Tanggal</option>
      <?php
	    for ($tgl=01 ; $tgl <=31 ; $tgl++)
		{ 
		 echo " <option value=$tgl> $tgl</option>";
      	}
	  ?>
	    </select>
	
		<select name="fm_bln" id="fm_bln">
          <option value="bln">Bulan</option>
          <option value="1">Januari</option>
          <option value="2">Februari</option>
          <option value="3">Maret</option>
          <option value="4">April</option>
          <option value="5">Mei</option>
          <option value="6">Juni</option>
          <option value="7">Juli</option>
          <option value="8">Agustus</option>
          <option value="9">September</option>
          <option value="10">Oktober</option>
          <option value="11">November</option>
          <option value="12">Desember</option>
        </select>
		
		<select name="fm_thn" id="fm_thn">
          <option value="thn">Tahun</option>
      <?php
	    $tahun=date('Y');
	    for ($thn=1970 ; $thn <=$tahun ; $thn++)
		{ 
		 echo " <option value=$thn> $thn</option>";
      	}
	  ?>
	    </select>
		</td>
    </tr>
    <tr> 
      <td>Deskripsi</td>
      <td>
	  <textarea name="fm_deskripsi" cols="35" rows="3" id="fm_deskripsi">
	  </textarea></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>
	  <input name="daftar" type="submit" id="daftar" value="  Daftar  "><
	  /td>
    </tr>
  </table>
</form>
</body>
</html>
