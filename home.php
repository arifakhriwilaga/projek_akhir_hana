<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['username'])){
header ("location:http://127.0.0.1/pa/login/login.php");
}
?>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<ul id="MenuBar1" class="MenuBarHorizontal">
  <li><a class="#" href="#">Data Master</a>
    <ul>
      <li><a href="barang.php">Barang</a></li>
      <li><a href="customer.php">Customer</a></li>
      <li><a href="supplier.php">Supplier</a></li>
    </ul>
  </li>
  <li><a href="#">Transaksi</a>
   <ul>
      <li><a href="input_penerimaan.php">Penerimaan</a></li>
      <li><a href="input_pengeluaran.php">Pengeluaran</a></li>
    </ul>
  </li>
  <li><a class="#" href="#">Laporan</a>
    <ul>
      <li><a href="laporan_barang.php">Barang</a>
      <li><a href="laporan_customer.php">Customer</a></li>
      <li><a href="laporan_supplier.php">Supplier</a></li>
      <li><a href="laporan_penerimaan.php">Penerimaan</a></li>
      <li><a href="laporan_pengeluaran.php">Pengeluaran</a></li>
    </ul>
  </li>
  <li><a href="http://127.0.0.1/pa/login/logout.php">Logout</a></li>
</ul>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>

