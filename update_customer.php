<?php
include("koneksi.php");
$kd_customer = $_POST['kd_customer'];
$nama_customer = $_POST['nama_customer'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$ket = $_POST['ket'];
$sql=mysql_query("Update customer set nama_customer='$nama_customer', alamat='$alamat', telepon='$telepon', email='$email', keterangan='$ket' where kode_customer='$kd_customer'");
if($sql)
echo "<script> alert ('Data dengan kode $kd_customer berhasil diupdate!'); parent.location='customer.php';</script>";
else
echo "<script> alert ('Data dengan kode $kd_customer gagal diupdate!'); parent.location='customer.php';</script>";
?>