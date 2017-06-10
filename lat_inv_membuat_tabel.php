<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Latihan-Febri Sukmawati||Membuat Tabel:.</title>
</head>

<body>
<?php
include_once("lat_inv_connect.php");
$tabel=mysql_query( "CREATE TABLE barang (
kode VARCHAR(5) NOT NULL,
nama_barang VARCHAR(20) NOT NULL,
kategori VARCHAR(30) NOT NULL,
jumlah INT NOT NULL,
pokok_jual INT NOT NULL,
harga_jual INT NOT NULL,
harga_beli INT NOT NULL,
PRIMARY KEY (kode))");

if($tabel)
{echo"Berhasil membuat tabel barang melalui script php";}
else
{echo"Gagal membuat tabel";}
?>

</body>
</html>
