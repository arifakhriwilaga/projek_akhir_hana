<html>
<head>
<title> Input Customer </title>
</head>
<body>
<h2>Tambah Customer</h2>
<?php
include "home.php";
?>

<br />
<br />
<br />
<br />
							<form method=POST action='simpan_customer.php' enctype='multipart/form-data'>
							<table id='table2'>
                  <?php
include"koneksi.php";
$sql=mysql_query("SELECT max(kode_customer) as maxID FROM customer WHERE kode_customer LIKE '%C%'");
					$data = mysql_fetch_array($sql);
					$idMax = $data['maxID'];
					$nourut = (int) substr($idMax, 1, 5);
					$nourut++;
					$newID = "C".sprintf("%05s", $nourut);	
echo"
								<tr>
									<td id='td2'>Kode Customer</td>
									<td id='td2'> : <input type=text name='kode_customer' value='$newID' readonly></td>
								</tr>"
								?>

								<tr>
									<td id='td2'>Nama Customer</td>
									<td id='td2'> : <input type=text name='nama_customer'></td>
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