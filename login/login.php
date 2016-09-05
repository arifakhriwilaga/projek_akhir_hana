<?php
include "koneksi.php";
session_start();
if (isset($_SESSION['username'])){
header ("location:http://127.0.0.1/pa/home.php");
}
?>
<html>
<head>
<title>LOGIN</title>
</head>
<body>
<form method="post" name="login" action="cek_login.php">
<font color="#FFFFFF">asd</font><br><br><p><p><br>
<table border=0 align="center" background="" cellpadding=5 cellspacing=0>
<tr>
<td colspan=3><center><font size=5 face="Trebuchet MS, Arial, Helvetica, sans-serif">Please Login.</font></center></td>
</tr>
<tr>
<td width="61"><font face="Trebuchet MS, Arial, Helvetica, sans-serif">Username</font></td>
<td width="3">:</td>
<td width="152"><input type="text" name="username"></td>
</tr>
<tr>
<td><font face="Trebuchet MS, Arial, Helvetica, sans-serif">Password</font></td>
<td>:</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td colspan=2></td>
<td><input type="submit" name="submit" value="Login"></td>
</tr>
</table>
</form>
</body>
</html>