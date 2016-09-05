<?php
include("koneksi.php");
$kp=$_POST['kode_penerimaan'];
$kd_barang=$_POST['kd_barang'];
$kode_supplier=$_POST['kode_supplier'];
				$t=date('d');
				$g=date('m');
				$l=date('Y');
				$tanggal = $l."-".$g."-".$t;
$jumlah=$_POST['jumlah'];
$qry=mysql_query("insert into penerimaan values('$kp','$kd_barang','$kode_supplier','$tanggal','$jumlah')");
$qry2=mysql_query("select stok from barang where kode_barang='$kd_barang'");
$stok=mysql_fetch_array($qry2);
$stok_baru=$stok[0]+$jumlah;
$qry3=mysql_query("update barang set stok='$stok_baru' where kode_barang='$kd_barang'");
if($qry&&$qry2&&$qry3)
	echo "<script>alert('Data dengan kode $kp berhasil disimpan!');parent.location='barang.php';</script>";
else
	echo "<script>alert('Data dengan kode $kp gagal disimpan!');parent.location='barang.php';</script>";
?>