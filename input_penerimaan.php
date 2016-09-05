<html>
<head>
<title>Input penerimaan</title>
</head>
<body>
<table border=1>
<?php
include "home.php";
?>

<br />
<br />
<br />
<br />
<?php
include "koneksi.php";
$sql= mysql_query("SELECT max(kode_penerimaan) as maxID FROM penerimaan WHERE kode_penerimaan LIKE '%TB%'");
				$data = mysql_fetch_array($sql);
				$idMax = $data['maxID'];
				$nourut = (int) substr($idMax, 2, 5);
				$nourut++;
				$newID = "TB".sprintf("%05s", $nourut);
				
				
				$tanggal = date('d-m-Y');
				echo"
				<h2>Tambah Penerimaan</h2>
						<form method=POST action=simpan_penerimaan.php enctype='multipart/form-data'>
						<input type=hidden name='banyak' value='0'>
						<table id='table'>
							<tr><td id='td'>Kode Penerimaan</td>
								<td id='td'> : <input type=text name='kode_penerimaan' value='$newID' readonly></td>
							</tr>
							<tr><td id='td'>Tanggal</td>
								<td id='td'> : <input type=text name='tanggal' value='$tanggal' readonly></td>
							</tr>";
							?>
							<tr>
	<td id='td2'>Supplier</td>
    <td id='td2'> : <select name="kode_supplier">
	<?php
		include"koneksi.php";
	   $b=mysql_query("select kode_supplier,nama_supplier from supplier");
	   while($data=mysql_fetch_array($b))
	   {
	   echo "<option value=".$data['0'].">".$data['1']."</option>";
	   }
	   ?>
	
	</select></td>
</tr><tr>
	<td id='td2'>Nama Barang</td>
	<td id='td2'> : <select name="kd_barang">
	<?php
	   include("koneksi.php");
	   $a=mysql_query("select kode_barang,nama_barang from barang");
	   while($data=mysql_fetch_array($a))
	   {
	   echo "<option value=".$data['0'].">".$data['1']."</option>";
	   }
	?>
	</select></td>
</tr>
<tr>
	<td id='td2'>Jumlah Pembelian</td>
    <td id='td2'> : <input type=text name=jumlah></td>
</tr>
							
							<tr><td id='td' colspan=2 align=center>
									<input type=submit value='Tambah'>
									<input type=button value='Batal' >
								</td>
							</tr>
							
						</table>
						</form>
						</body>
						</html>