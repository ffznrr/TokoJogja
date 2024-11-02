<?php 
session_start();
include 'koneksi.php';
if (!isset($_SESSION["pelanggan"])) 
{
	echo "<script> alert('anda belum login');</script>";
	echo "<script> location ='login.php';</script>";
	exit();
}
$idpem=$_GET["id"];
$ambil=$koneksi->query("SELECT*FROM pembelian WHERE id_pembelian='$idpem'");
$detpem=$ambil->fetch_assoc();

$id_pelanggan_beli = $detpem["id_pelanggan"];
$id_pelanggan_login=$_SESSION["pelanggan"]["id_pelanggan"];
if ($id_pelanggan_login !==$id_pelanggan_beli) 
{
	echo "<script> location ='riwayat.php';</script>";
}

?>
<?php include 'menu.php'; ?><br><br><br><br>
<!DOCTYPE html>
<html>
<head>
	<title>TOKO JOGJA</title>
	<link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap.css">
</head>
<body>
	<div class="container">

		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label >Nama Pembeli</label>
				<input type="text" name="nama" class="form-control" required>
				
			</div>
			<div class="form-group">
				<label >Sudah sampai?</label><br>
				<input type="radio" name="bank" > Ya, Sudah
			
			</div>
			<div class="form-group">
				<label >Jumlah</label>
				<input type="number" name="jumlah" min="1" class="form-control" required>
				
			</div>
			<div class="form-group">
				<label >Foto Bukti</label>
				<input type="file" name="bukti" class="form-control" required>
				<p class="text-danger">Foto Bukti Jpg, Max 1 MB</p>
			</div>
			<button class="btn btn-primary" name="kirim">Kirim</button>
		</form>
	</div>
<?php  
if (isset($_POST["kirim"]))
{
	$namabukti =$_FILES["bukti"]["name"];
	$lokasibukti=$_FILES["bukti"]["tmp_name"];
	$namafix=date("YmdHis").$namabukti;
	move_uploaded_file($lokasibukti, "buktipembayaran/$namafix");

	$nama =$_POST["nama"];
	$bank =$_POST["bank"];
	$jumlah =$_POST["jumlah"];
	$tanggal = date("Y-m-d");


	$koneksi->query("INSERT INTO pembayaran(id_pembelian, nama, bank, jumlah, tanggal, bukti)
		VALUES ('$idpem','$nama','$bank','$jumlah','$tanggal','$namafix')");

	$koneksi->query("UPDATE pembelian SET status_pembelian='Selesai'
		WHERE id_pembelian='$idpem'");
	echo "<script> alert('Terima kasih');</script>";
}
?>

</body>
</html>