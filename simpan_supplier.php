<?php
include("koneksi.php");
$kd_supplier = $_POST['kode_supplier'];
$nama_supplier = $_POST['nama_supplier'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$sql=mysql_query("insert into supplier value('$kd_supplier','$nama_supplier','$alamat','$telepon','$email','-')");
if($sql)
echo "<script> alert ('Data dengan kode $kd_supplier berhasil disimpan!'); parent.location='supplier.php';</script>";
else
echo "<script> alert ('Data dengan kode $kd_supplier gagal disimpan!'); parent.location='supplier.php';</script>";
?>