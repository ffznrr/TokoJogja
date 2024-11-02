<?php 
 session_start(); 
include 'koneksi.php';
?>
<?php
$datakategori=array();
$ambil= $koneksi->query("SELECT * FROM kategori");
while($tiap=$ambil->fetch_assoc())
{
	$datakategori[]=$tiap;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>TOKO JOGJA</title>
	<link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>

<style type="text/css">
.share{
position: fixed;
height: 45px;
width: 42px;
left: 1px;
bottom: 300px;
z-index: 9999;
}
</style>
<body>
<section class="konten">
	<?php include 'menu.php'; ?>
	<?php include 'slider.php'; ?><br>
	 <?php include 'buttonup.php'; ?>

	 <div style="border: solid; margin: 25px 10%; height: 245px;border-radius: 25px;">
	<h1 style="text-align: center;">TOKO JOGJA</h1>
	<p style="color: black; margin: 0 5px">"Selamat datang di Toko Mutiara, destinasi belanja bahan pokok terbaik untuk memenuhi kebutuhan sehari-hari Anda! Dengan kualitas terjamin dan harga terjangkau, kami hadir untuk memudahkan Anda dalam mendapatkan produk kebutuhan sehari-hari tanpa perlu khawatir tentang anggaran. Segera kunjungi website kami dan temukan berbagai promo menarik serta diskon spesial. Toko Mutiara, solusi belanja cerdas untuk keluarga Anda!"</p>
	</div>

	<div class="container"><br>
		
		
		<form action="pencarian.php" method="get" class="navbar-form navbar-right">
			<input type="text" class="form-control" name="keyword" placeholder="Cari Produk">
			<button class="btn btn-primary"><i class="fas fa-search"></i></button>
		</form>
		<form method="get" class="navbar-form navbar-right">
			<select class="form-control" name="kategori" onchange="document.location.href= this.options[this.selectedIndex].value;">
	 			<option value="">Pilih Kategori</option>
	 			<?php foreach ($datakategori as $key => $value): ?>
	 			<option value="kategori.php?id=<?php echo $value["id_kategori"] ?>" value="<?php echo $value["id_kategori"] ?>" ><?php echo $value["nama_kategori"] ?> </option>
	 			<?php endforeach ?>
 			</select>
		</form>
		<?php 

		if (empty($_SESSION['keranjang']) OR !isset($_SESSION["keranjang"])):?>
				
		<?php else: ?>
		<?php endif ?>
		<?php include 'produk.php'; ?><br>

	    
	</div>
	<?php include 'footer.php'; ?>
</section>
</body>
</html>