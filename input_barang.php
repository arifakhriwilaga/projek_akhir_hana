<html>
<head>
<title> Input Barang </title>
</head>
<body>
<h2>Input Barang</h2>
<?php
include "home.php";
?>

<br />
<br />
<br />
<br />
							<form method=POST action='simpan_barang.php' enctype='multipart/form-data'>
							<table id='table2'>
                  <?php
				include"koneksi.php";
				$sql= mysql_query("SELECT max(kode_barang) as maxID FROM barang WHERE kode_barang LIKE '%B%'");
				$data = mysql_fetch_array($sql);
				$idMax = $data['maxID'];
				$nourut = (int) substr($idMax, 1, 5);
				$nourut++;
				$newID = "B".sprintf("%05s", $nourut);
echo"
								<tr>
									<td id='td2'>Kode Barang</td>
									<td id='td2'> : <input type=text name='kode_barang' value='$newID' readonly></td>
								</tr>"
								?>

								<tr>
									<td id='td2'>Merk</td>
									<td id='td2'> : <input type=text name='nama_barang'></td>
								</tr>
<tr>
									<td id='td2'>Harga</td>
									<td id='td2'> : <input type=text name='harga'></td>
								</tr>
                                <tr>
	<td id='td2'>Supplier</td>
    <td id='td2'> : <select name="kode_suppplier">
	<?php
	include"koneksi.php";
	   $b=mysql_query("select kode_supplier,nama_supplier from supplier");
	   while($data=mysql_fetch_array($b))
	   {
	   echo "<option value=".$data['0'].">".$data['1']."</option>";
	   }
	?>
	</select></td>
</tr>

<tr>
									<td id='td2'>CPU</td>
									<td id='td2'> : <input type=text name='cpu'></td>
								</tr>

<tr>
									<td id='td2'>VGA</td>
									<td id='td2'> : <input type=text name='vga'></td>
								</tr>

<tr>
									<td id='td2'>RAM</td>
									<td id='td2'> : <input type=text name='ram'></td>
								</tr>

<tr>
									<td id='td2'>HDD</td>
									<td id='td2'> : <input type=text name='hdd'></td>
								</tr>

								<tr>
									<td id='td2'>Jumlah Stok</td>
									<td id='td2'> : <input type=text name='stok' value=0 readonly></td>
								</tr>
								<tr>
									<td id='td2'>Stok Minimal</td>
									<td id='td2'> : <input type=text name='stok_minimal'></td>
								</tr>
								
								<tr>
									<td id='td2' colspan=2 align=center>
										<input type=submit value='Simpan'>
										<input type=button value='Batal' onclick=\"window.location.href='barang.php'\">
									</td>
								</tr>