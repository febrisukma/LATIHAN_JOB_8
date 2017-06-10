<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Latihan-Febri Sukmawati||Insert Record:.</title>
</head>

<body>
<?php
include_once("lat_inv_connect.php");
$insert=mysql_query("INSERT INTO barang (kode,nama_barang,kategori,jumlah,pokok_jual,harga_jual,harga_beli)
							VALUES ('A001','Fanta 270ml','Minuman','67','32','3000','2300')");
							
$insert=mysql_query("INSERT INTO barang (kode,nama_barang,kategori,jumlah,pokok_jual,harga_jual,harga_beli)
							VALUES ('A002','Sprite 270ml','Minuman','56','25','3000','2300')");
						
$insert=mysql_query("INSERT INTO barang (kode,nama_barang,kategori,jumlah,pokok_jual,harga_jual,harga_beli)
							VALUES ('A003','Coca Cola 270ml','Minuman','34','21','3000','2300')");
							
$insert=mysql_query("INSERT INTO barang (kode,nama_barang,kategori,jumlah,pokok_jual,harga_jual,harga_beli)
							VALUES ('B001','QTela BBQ 200g','Snack','47','36','5500','4700')");
							
$insert=mysql_query("INSERT INTO barang (kode,nama_barang,kategori,jumlah,pokok_jual,harga_jual,harga_beli)
							VALUES ('B002','QTela Balado 200g','Snack','27','12','5500','4700')");
							
$insert=mysql_query("INSERT INTO barang (kode,nama_barang,kategori,jumlah,pokok_jual,harga_jual,harga_beli)
							VALUES ('B003','Chipstaro BBQ 250g','Snack','30','14','6000','7000')");
							
$insert=mysql_query("INSERT INTO barang (kode,nama_barang,kategori,jumlah,pokok_jual,harga_jual,harga_beli)
							VALUES ('B004','Chipstaro Balado 250g','Snack','29','19','6400','7600')");
							
$insert=mysql_query("INSERT INTO barang (kode,nama_barang,kategori,jumlah,pokok_jual,harga_jual,harga_beli)
							VALUES ('C001','Sunlight 400ml','Cairan Pencuci Piring','24','8','5000','6200')");
							
$insert=mysql_query("INSERT INTO barang (kode,nama_barang,kategori,jumlah,pokok_jual,harga_jual,harga_beli)
							VALUES ('C002','Sunlight 800ml','Cairan Pencuci Piring','28','12','11000','12000')");
							
$insert=mysql_query("INSERT INTO barang (kode,nama_barang,kategori,jumlah,pokok_jual,harga_jual,harga_beli)
							VALUES ('C003','Sunligh 1200ml','Cairan Pencuci Piring','19','8','16000','17000')");

$insert=mysql_query("INSERT INTO barang (kode,nama_barang,kategori,jumlah,pokok_jual,harga_jual,harga_beli)
							VALUES ('A004','Fanta 1.5l','Minuman','21','16','9000','11000')");
							
$insert=mysql_query("INSERT INTO barang (kode,nama_barang,kategori,jumlah,pokok_jual,harga_jual,harga_beli)
							VALUES ('A005','Sprite 1.5l','Minuman','31','22','9000','11000')");
						
$insert=mysql_query("INSERT INTO barang (kode,nama_barang,kategori,jumlah,pokok_jual,harga_jual,harga_beli)
							VALUES ('A005','Coca Cola 1.5l','Minuman','35','10','9000','11000')");
							
$insert=mysql_query("INSERT INTO barang (kode,nama_barang,kategori,jumlah,pokok_jual,harga_jual,harga_beli)
							VALUES ('D001','Oreo Krim Vanila 70g','Biskuit','16','8','5500','7000')");
							
$insert=mysql_query("INSERT INTO barang (kode,nama_barang,kategori,jumlah,pokok_jual,harga_jual,harga_beli)
							VALUES ('D002','Oreo Krim Coklat 70g','Biskuit','18','7','5500','7000')");
							

			
if($insert)
{echo"Berhasil menambahkan data pada tabel barang";}
else
{echo"Gagal menambahkan data";}
?>
</body>
</html>
