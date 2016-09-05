<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table border="1">
<?php
include "home.php";
?>

<br />
<br />
<br />
<br />
<tr>
	<th>Kode Supplier</th><th>Nama Supplier</th><th>Alamat</th><th>Telepon</th><th>Email</th><th>Keterangan</th>
</tr>
<?php
include("koneksi.php");
$sql=mysql_query("select * from supplier");
while($baris=mysql_fetch_array($sql))
{
	echo "<tr>";
	echo "<td>$baris[0]</td>";	
	echo "<td>$baris[1]</td>";
	echo "<td>$baris[2]</td>";
	echo "<td>$baris[3]</td>";
	echo "<td>$baris[4]</td>";
	echo "<td>$baris[5]</td>";
	echo "</tr>";
}
?>
</table>
</body>
</html>