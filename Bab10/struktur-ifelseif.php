<html>
<head>
<title>Penggunaan IF-ELSE-IF</title>
</head>
<body>
a=3
<br>
b=5
<br>
c=8
<br><br>
<?php
$a=3;
$b=5;
$c=8;

if ($a > $b) {
	echo "a Lebih besar dari b";
}
else if($a > $c) {
	echo "a lebih besar dari c";
}
else {
	echo "a lebih kecil dari b dan c";
}
?>
</body>
</html>
