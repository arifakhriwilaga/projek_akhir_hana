<?php
include("koneksi.php");
$kd_barang = $_GET['kode_barang'];
$key = $_GET['key'];

if($key == 'edit')
{
$sql=mysql_query("select * from barang where kode_barang='$kd_barang'");
$data = mysql_fetch_array($sql);
include"home.php";
echo "
<br />
<br />
<br />
<br />
<form action=update_barang.php method=POST>
<table border=1>
<tr>
	<td colspan=3>Data barang</td>
</tr>
<tr>
	<td>Kode Barang</td><td>:</td><td><input type='text' name='kd_barang' value='$data[0]' disabled></td>
</tr>
<tr>
	<td>Merk</td><td>:</td><td><input type='text' name='nama_barang' value='$data[1]'></td>
</tr>
<tr>

<tr>
	<td>Harga</td><td>:</td><td><input type='text' name='harga' value='$data[2]'></td>
</tr>

	<td>Kode Supplier</td><td>:</td><td><input type='text' name='kd_supplier' value='$data[3]' disabled></td>
</tr>
<tr>

<tr>
	<td>CPU</td><td>:</td><td><input type='text' name='cpu' value='$data[4]'></td>
</tr>

<tr>
	<td>VGA</td><td>:</td><td><input type='text' name='vga' value='$data[5]'></td>
</tr>

<tr>
	<td>RAM</td><td>:</td><td><input type='text' name='ram' value='$data[6]'></td>
</tr>

<tr>
	<td>HDD</td><td>:</td><td><input type='text' name='hdd' value='$data[7]'></td>
</tr>
<tr>
	<td>Stok</td><td>:</td><td><input type='text' name='stok' value='$data[8]' disabled></td>
</tr>
<tr>
	<td>Stok Minimal</td><td>:</td><td><input type='text' name='sm' value='$data[9]'></td>
</tr>

<tr>
	<td>Keterangan</td><td>:</td><td><input type='text' name='ket' value='$data[10]'></td>
</tr>
<tr>
	<td colspan=3>
	<input type=hidden name=kd_barang value='$data[0]'>
	<input type=hidden name=kd_supplier value='$data[3]'>
	<input type=hidden name=stok value='$data[8]'>
	<input type=submit value=Update> <input type=reset value=Cancel></td>
</tr>

</table>
</form>
";	
}
elseif($key == 'delete')
{
	$sql=mysql_query("delete from barang where kode_barang='$kd_barang'");
	if($sql)
echo "<script> alert ('Data dengan kode $kd_barang berhasil dihapus!'); parent.location='barang.php';</script>";
else
echo "<script> alert ('Data dengan kode $kd_barang gagal dihapus!'); parent.location='barang.php';</script>";
}
?>