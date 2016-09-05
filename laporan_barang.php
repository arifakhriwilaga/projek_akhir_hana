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
	<th>Kode Barang</th>
	<th>Merk</th>
	<th>Harga</th>
	<th>Kode Supplier</th>
	<th>CPU</th>
	<th>VGA</th>
	<th>RAM</th>
	<th>HDD</th>
	<th>Stok</th>
	<th>Stok Minimal</th>
	<th>Keterangan</th>
</tr>
<?php
include("koneksi.php");
$sql=mysql_query("select * from barang");
while($baris=mysql_fetch_array($sql))
{
	echo "<tr>";
	echo "<td>$baris[0]</td>";	
	echo "<td>$baris[1]</td>";
	echo "<td>$baris[2]</td>";
	echo "<td>$baris[3]</td>";
	echo "<td>$baris[4]</td>";
	echo "<td>$baris[5]</td>";
	echo "<td>$baris[6]</td>";
	echo "<td>$baris[7]</td>";
	echo "<td>$baris[8]</td>";
	echo "<td>$baris[9]</td>";
	echo "<td>$baris[10]</td>";
	echo "</tr>";
}
?>
</table>
</body>
</html>