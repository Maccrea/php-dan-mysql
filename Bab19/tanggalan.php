<?php
$tanggal=date('d-m-Y');
$hari=date('D');

if ($hari="Sunday")
{
 $indo="Minggu";
}
else if($hari="Monday")
{
	$indo="Senin";
}
else if($hari="Thuesday")
{
	$indo="Selasa";
}
else if($hari="Wednesday")
{
	$indo="Rabu";
}
else if($hari="Thursday")
{
	$indo="Kamis";
}
else if($hari="Friday")
{
	$indo="Jum'at";
}
else
{
	$indo="Sabtu";
}
echo "<b>Tanggal Sekarang : $indo,$tanggal </b>";


?>