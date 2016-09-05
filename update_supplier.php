<?php
include("koneksi.php");
$kd_supplier = $_POST['kd_supplier'];
$nama_supplier = $_POST['nama_supplier'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$ket = $_POST['ket'];
$sql=mysql_query("Update supplier set nama_supplier='$nama_supplier', alamat='$alamat', telepon='$telepon', email='$email', keterangan='$ket' where kode_supplier='$kd_supplier'");
if($sql)
echo "<script> alert ('Data dengan kode $kd_supplier berhasil diupdate!'); parent.location='supplier.php';</script>";
else
echo "<script> alert ('Data dengan kode $kd_supplier gagal diupdate!'); parent.location='supplier.php';</script>";
?>