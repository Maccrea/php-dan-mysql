<?php
// isilah dengan user dan password dari MySQL anda
$host 	="localhost";
$user 	= "root";
$passwd = "";
$database= "pendaftaran";

$connect=mysql_connect($host,$user,$passwd);
if (! $connect) {
  echo " wah nggak bisa tuh ";
}
 
// memilih database pda server
mysql_select_db($database) or die ( " database nggak ada tuh ");
?>