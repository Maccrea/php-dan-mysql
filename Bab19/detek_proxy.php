
<?php 
echo "<font face=verdana size=2>";
echo "<font size=3><B>mesi Pendeteksi Proxy</B></font><P>";

if(isset($HTTP_X_FORWARDED_FOR))
{
	if ($HTTP_X_FORWARDED_FOR) 
	{ 
	//Mendeteksi Proxy
	 
	echo "<b>Proxy Detected...</b><br>";

	echo "Alamat IP anda : 
	<i> $HTTP_X_FORWARDED_FOR</i><br>";

	echo "Alamat Proxy Server: 
	<i> $HTTP_VIA </i>
        <BR> You Proxy I.P address: $REMOTE_ADDR <br>";

	 
	}
}
 else 
	{ 
	// no proxy detected
	 
	
	echo "<b>Proxy tidak terdeteksi</b><br>
	
	Alamat IP anda :
	<i>= $REMOTE_ADDR </i><br>";
	
	 
} 

echo "</font>";
?>