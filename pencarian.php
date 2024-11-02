<style type="text/css">
	.col-md-3{
		position: relative;
		margin:0 auto;
		overflow: hidden;
	}
	.tumbnail{
		position: absolute;
		top: 0;
		left: 0;
	}
	.thumbnail img{
		padding: 10px;
		-webkit-transition:0.4 ease;
		transition: 0.4 ease;
	}
	.col-md-3:hover .thumbnail img{
		-webkit-transform:scale(1.36);
		transform: scale(1.36);
	}
	
</style>
<?php 
session_start();
include 'koneksi.php';
$keyword = $_GET["keyword"];

$semuadata=array();
$ambil=$koneksi->query("SELECT*FROM produk WHERE nama_produk LIKE '%$keyword%'
	OR deskripsi_produk LIKE '%$keyword%'");
WHILE($pecah=$ambil->fetch_assoc())
{
	$semuadata[]=$pecah;
}
?>
<?php
$datakategori=array();
$ambil= $koneksi->query("SELECT * FROM kategori");
while($tiap=$ambil->fetch_assoc())
{
	$datakategori[]=$tiap;
}
?>
<?php include 'menu.php'; ?><br><br><br><br><br>
<?php include 'buttonup.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>FP CASUALS</title>
	<link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<form action="pencarian.php" method="get" class="navbar-form navbar-right">
			<input type="text" class="form-control" name="keyword" placeholder="Cari Produk">
			<button class="btn btn-primary"><i class="fas fa-search"></i></button>
		</form>
		
		<h3>Hasil Pencarian : <?php echo $keyword ?></h3>

		<?php if (empty($semuadata)): ?>
			<div class="alert alert-danger">Produk <strong><?php echo $keyword ?></strong> Tidak Ditemukan</div>
			
		<?php endif ?>

		<div class="row">
			

			<?php foreach ($semuadata as $key => $value): ?>
				
			
			<div class="col-md-3" style=" padding:  5px;">
				<div class="thumbnail" style="border: 1px solid #ddd;">
					<img src="foto_produk/<?php echo $value['foto_produk'] ?>"class="img-responsive" width="1000" alt="">
					<div class="caption">
						<h3><?php echo $value['nama_produk'] ?></h3>
						<h5>Rp <?php echo number_format($value['harga_produk']) ?></h5>
						<a href="beli.php?id=<?php echo $value['id_produk']; ?>" class="btn btn-primary"> Beli</a>
						<a href="detail.php?id=<?php echo $value['id_produk']; ?>" class="btn btn-default">Detail</a>

					</div>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	</div>

</body>
</html>