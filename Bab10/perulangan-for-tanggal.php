<html>
<head>
<title>Perulangan-FOR-pada Form</title>
</head>
<body>
Penggunaan pada Form :
<br>
<?php
echo "<form name=form1 method=post > ";
  echo "Tanggal ";
  echo "<select name=tanggal";
  
  for ($tanggal=0 ; $tanggal <=31; $tanggal++) {
    echo "<option value=$tanggal> $tanggal </option>";
  }
  
  	echo "</select>";
	echo "</form>";
?>
</body>
</html>