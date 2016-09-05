<?php
include("koneksi.php");
$kd_barang = $_POST['kd_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$ks = $_POST['kd_supplier'];
$cpu = $_POST['cpu'];
$vga = $_POST['vga'];
$ram = $_POST['ram'];
$hdd = $_POST['hdd'];
$stok = $_POST['stok'];
$sm = $_POST['sm'];
$ket = $_POST['ket'];
$sql= mysql_query("Update barang set nama_barang='$nama_barang', harga='$harga', kode_supplier='$ks', CPU='$cpu', VGA='$vga', RAM='$ram', HDD='$hdd', stok='$stok', stok_minimal='$sm', keterangan='$ket' where kode_barang='$kd_barang'");
if($sql)
echo "<script> alert ('Data dengan kode $kd_barang berhasil diupdate!'); parent.location='barang.php';</script>";
else
echo "<script> alert ('Data dengan kode $kd_barang gagal diupdate!'); parent.location='barang.php';</script>";
?>