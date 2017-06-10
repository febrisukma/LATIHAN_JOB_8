<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Latihan-Febri Sukmawati||Tampilan Data:.</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<p align="center" class="style1">DATA BARANG </p>
<table border="1" align="center">
<tr bgcolor="#00FFFF">	
	<td>Kode Barang</td>
	<td>Nama Barang</td>
	<td>Jumlah Barang</td>
	<td>Harga Jual</td>
	<td>Harga Beli</td>
</tr>
	



<?php
include_once("lat_inv_connect.php");
$selectview=mysql_query("select kode,nama_barang,jumlah,harga_jual,harga_beli
						from barang order by kode asc");
while($data=mysql_fetch_array($selectview))
{	echo" <tr>
	<td>$data[0]</td>
	<td>$data[1]</td>
	<td>$data[2]</td>
	<td>$data[3]</td>
	<td>$data[4]</td>
	</tr>";
	}
	?>
</table>
</body>
</html>
