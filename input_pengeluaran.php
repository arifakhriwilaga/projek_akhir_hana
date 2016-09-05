<html>
<head>
<title>Input Pengeluaran</title>
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
$sql= mysql_query("SELECT max(kode_pengeluaran) as maxID FROM pengeluaran WHERE kode_pengeluaran LIKE '%KB%'");
				$data = mysql_fetch_array($sql);
				$idMax = $data['maxID'];
				$nourut = (int) substr($idMax, 2, 5);
				$nourut++;
				$newID = "KB".sprintf("%05s", $nourut);
				
				
				$tanggal = date('d-m-Y');
				echo"
				<h2>Tambah Pengeluaran</h2>
						<form method=POST action=simpan_pengeluaran.php enctype='multipart/form-data'>
						<table id='table'>
							<tr><td id='td'>Kode Pengeluaran</td>
								<td id='td'> : <input type=text name='kode_pengeluaran' value='$newID' readonly></td>
							</tr>
							<tr><td id='td'>Tanggal</td>
								<td id='td'> : <input type=text name='tanggal' value='$tanggal' readonly></td>
							</tr>";
							?>
							<tr>
	<td id='td2'>Customer</td>
    <td id='td2'> : <select name="kode_customer">
	<?php
		include"koneksi.php";
	   $b=mysql_query("select kode_customer,nama_customer from customer");
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
	<td id='td2'>Jumlah Penjualan</td>
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