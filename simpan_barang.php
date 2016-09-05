<?php
include("koneksi.php");
$kd_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$ks = $_POST['kode_suppplier'];
$cpu = $_POST['cpu'];
$vga = $_POST['vga'];
$ram = $_POST['ram'];
$hdd = $_POST['hdd'];
$stok = $_POST['stok'];
$sm = $_POST['stok_minimal'];
$sql=mysql_query("insert into barang value('$kd_barang', '$nama_barang', '$harga', '$ks', '$cpu', '$vga', '$ram', '$hdd', '$stok', '$sm', '-')");
if($sql)
echo "<script> alert ('Data dengan kode $kd_barang berhasil disimpan!'); parent.location='barang.php';</script>";
else
echo "<script> alert ('Data dengan kode $kd_barang gagal disimpan!'); parent.location='barang.php';</script>";
?>