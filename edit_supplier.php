<?php
include("koneksi.php");
$kd_supplier = $_GET['kode_supplier'];
$key = $_GET['key'];

if($key == 'edit')
{
$sql=mysql_query("select * from supplier where kode_supplier='$kd_supplier'");
$data = mysql_fetch_array($sql);
include"home.php";
echo "
<br />
<br />
<br />
<br />
<form action=update_supplier.php method=POST>
<table border=1>
<tr>
	<td colspan=3>Data Supplier</td>
</tr>
<tr>
	<td>Kode Supplier</td><td>:</td><td><input type='text' name='kd_supplier' value='$data[0]' disabled></td>
</tr>
<tr>
	<td>Nama Supplier</td><td>:</td><td><input type='text' name='nama_supplier' value='$data[1]'></td>
</tr>
<tr>
	<td>Alamat</td><td>:</td><td><input type='text' name='alamat' value='$data[2]'></td>
</tr>
<tr>
	<td>Telepon</td><td>:</td><td><input type='text' name='telepon' value='$data[3]'></td>
</tr>
<tr>
	<td>Email</td><td>:</td><td><input type='text' name='email' value='$data[4]'></td>
</tr>
<tr>
	<td>Keterangan</td><td>:</td><td><input type='text' name='ket' value='$data[5]'></td>
</tr>
<tr>
	<td colspan=3>
	<input type=hidden name=kd_supplier value='$data[0]'>
	<input type=submit value=Update> <input type=reset value=Cancel></td>
</tr>

</table>
</form>
";	
}
elseif($key == 'delete')
{
	$sql=mysql_query("delete from supplier where kode_supplier='$kd_supplier'");
	if($sql)
echo "<script> alert ('Data dengan kode $kd_supplier berhasil dihapus!'); parent.location='supplier.php';</script>";
else
echo "<script> alert ('Data dengan kode $kd_supplier gagal dihapus!'); parent.location='supplier.php';</script>";
}
?>