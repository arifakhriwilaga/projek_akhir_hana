<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include("koneksi.php");
$kp = $_GET['kode_penerimaan'];
$key = $_GET['key'];

if($key == 'edit')
{
$sql=mysql_query("select * from penerimaan where kode_penerimaan='$kp'");
$data = mysql_fetch_array($sql);
echo "
<form action=update_penerimaan.php method=POST>
<table border=1>
<tr>
	<td colspan=3>Data Penerimaan</td>
</tr>
<tr>
	<td>Kode Penerimaan</td><td>:</td><td><input type='text' name='kp' value='$data[0]' disabled></td>
</tr>
<tr>
	<td>Kode Barang</td><td>:</td><td><input type='text' name='kode_barang' value='$data[1]' disabled></td>
</tr>
<tr>
	<td>Kode Supplier</td><td>:</td><td><input type='text' name='kode_supplier' value='$data[2]' disabled></td>
	
</tr>
<tr>
	<td>Tanggal</td><td>:</td><td><input type='text' name='tanggal' value='$data[3]'></td>
</tr>
<tr>
	<td>Total Penerimaan</td><td>:</td><td><input type='text' name='jumlah' value='$data[4]'></td>
</tr>
	<td colspan=3>
	<input type=hidden name=kode_penerimaan value='$data[0]'>
	<input type=hidden name=kd_barang value='$data[1]'>
	<input type=hidden name=kode_supplier value='$data[2]'>
	<input type=submit value=Update> <input type=reset value=Cancel></td>
</tr>

</table>
</form>
";	
}
elseif($key == 'delete')
{
	$sql=mysql_query("delete from supllier where kode_penerimaan='$kp'");
	if($sql)
echo "<script> alert ('Data dengan kode $kp berhasil dihapus!'); parent.location='penerimaan.php';</script>";
else
echo "<script> alert ('Data dengan kode $kp gagal dihapus!'); parent.location='penerimaan.php';</script>";
}
?>
<body>
</body>
</html>