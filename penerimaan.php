<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Penerimaan</title>
</head>
<table border="1">
<tr>
	<th>Kode Penerimaan</th><th>Kode Barang</th><th>Kode Supplier</th><th>Tanggal</th><th>Total Penerimaan</th>
<th>Aksi</th></tr>
<?php
include("koneksi.php");
$sql=mysql_query("select * from penerimaan");
while($baris=mysql_fetch_array($sql))
{
	echo "<tr>";
	echo "<td>$baris[0]</td>";	
	echo "<td>$baris[1]</td>";
	echo "<td>$baris[2]</td>";
	echo "<td>$baris[3]</td>";
	echo "<td>$baris[4]</td>";
	echo "<td><href=edit_penerimaan.php?kode_penerimaan=$baris[0]&key=edit> Edit </a> | <a href=edit_penerimaan.php?kode_penerimaan=$baris[0]&key=delete> Delete </a></td>";
	echo "</tr>";
}
?>

<body>
</body>
</html>