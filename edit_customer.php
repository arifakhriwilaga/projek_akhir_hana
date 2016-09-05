<?php
include("koneksi.php");
$kd_customer = $_GET['kode_customer'];
$key = $_GET['key'];

if($key == 'edit')
{
$sql=mysql_query("select * from customer where kode_customer='$kd_customer'");
$data = mysql_fetch_array($sql);
include"home.php";
echo "
<br />
<br />
<br />
<br />
<form action=update_customer.php method=POST>
<table border=1>
<tr>
	<td colspan=3>Data Customer</td>
</tr>
<tr>
	<td>Kode Customer</td><td>:</td><td><input type='text' name='kd_customer' value='$data[0]' disabled></td>
</tr>
<tr>
	<td>Nama Customer</td><td>:</td><td><input type='text' name='nama_customer' value='$data[1]'></td>
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
	<input type=hidden name=kd_customer value='$data[0]'>
	<input type=submit value=Update> <input type=reset value=Cancel></td>
</tr>

</table>
</form>
";	
}
elseif($key == 'delete')
{
	$sql=mysql_query("delete from customer where kode_customer='$kd_customer'");
	if($sql)
echo "<script> alert ('Data dengan kode $kd_customer berhasil dihapus!'); parent.location='customer.php';</script>";
else
echo "<script> alert ('Data dengan kode $kd_customer gagal dihapus!'); parent.location='customer.php';</script>";
}
?>