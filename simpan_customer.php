<?php
include("koneksi.php");
$kd_customer = $_POST['kode_customer'];
$nama_customer = $_POST['nama_customer'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$sql=mysql_query("insert into customer value('$kd_customer','$nama_customer','$alamat','$telepon','$email','-')");
if($sql)
echo "<script> alert ('Data dengan kode ".$kd_customer." berhasil disimpan!'); parent.location='customer.php';</script>";
else
echo "<script> alert ('Data dengan kode ".$kd_customer." gagal disimpan!'); parent.location='customer.php';</script>";
?>