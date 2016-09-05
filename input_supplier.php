<html>
<head>
<title> Input Supplier </title>
</head>
<body>
<h2>Tambah Supplier</h2>
<?php
include "home.php";
?>

<br />
<br />
<br />
<br />
							<form method=POST action='simpan_supplier.php' enctype='multipart/form-data'>
							<table id='table2'>
                  <?php
include"koneksi.php";
					$sql=mysql_query("SELECT max(kode_supplier) as maxID FROM supplier WHERE kode_supplier LIKE '%S%'");
					$data = mysql_fetch_array($sql);
					$idMax = $data['maxID'];
					$nourut = (int) substr($idMax, 1, 5);
					$nourut++;
					$newID = "S".sprintf("%05s", $nourut);	
echo"
								<tr>
									<td id='td2'>Kode Supplier</td>
									<td id='td2'> : <input type=text name='kode_supplier' value='$newID' readonly></td>
								</tr>"
								?>

								<tr>
									<td id='td2'>Nama Supplier</td>
									<td id='td2'> : <input type=text name='nama_supplier'></td>
								</tr>
                                <tr>
	<td id='td2'>Alamat</td>
    <td id='td2'> : <input type="text" name="alamat"></td>
</tr>
								<tr>
									<td id='td2'>Telepon</td>
									<td id='td2'> : <input type=text name='telepon'></td>
								</tr>
								<tr>
									<td id='td2'>Email</td>
									<td id='td2'> : <input type=text name='email'></td>
								</tr>
								
								<tr>
									<td id='td2' colspan=2 align=center>                                   
										<input type=submit value='Simpan'>
										<input type=button value='Batal' >
									</td>
								</tr>