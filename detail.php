<style type="text/css">
    * { margin: 0; padding: 0; }
    img { max-width: 100%; }
    .cycle-slideshow {
        width: 100%;
        max-width: 960px;
        display: block;
        position: relative;
        margin: 20px auto;
        overflow: hidden;
    }
    .cycle-prev, .cycle-next {
        font-size: 200%;
        color: black;
        display: block;
        position: absolute;
        top: 50%;
        z-index: 990;
        cursor: pointer;
        margin-top: -16px;
    }
    .cycle-prev { left: 42px; }
    .cycle-next { right: 62px; }
    .cycle-pager {
        position: absolute;
        width: 100%;
        height: 10px;
        bottom: 10px;
        z-index: 990;
        text-align: center;
    }
    .cycle-pager span {
        text-indent: 100%;
        top: 100px;
        width: 10px;
        height: 10px;
        display: inline-block;
        border: 1px solid #808080;
        border-radius: 50%;
        margin: 0 10px;
        white-space: nowrap;
        cursor: pointer;
    }
    .cycle-pager-active { background-color: black; }
h5{
	color: black;
}
.tabs label {
	font-family: 'bebas_neueregular';
	cursor: pointer;
	background: #FAFAFA;
	font-size: 20px;
	line-height: 45px;
	height: 45px;
	position: relative;
	padding: 0 40px;
	float: left;
	display: block;
	width: 20.3333%;
	color:#999999;
	font-weight: normal;
	text-transform: capitalize;
	text-align: center;
	text-shadow: 1px 1px 1px rgba(255,255,255,0.3);
	box-shadow: 2px 0 2px rgba(0,0,0,0.1), -2px 0 2px rgba(0,0,0,0.1);
	-webkit-box-shadow: 2px 0 2px rgba(0,0,0,0.1), -2px 0 2px rgba(0,0,0,0.1);
	-moz-box-shadow: 2px 0 2px rgba(0,0,0,0.1), -2px 0 2px rgba(0,0,0,0.1);
	-o-box-shadow: 2px 0 2px rgba(0,0,0,0.1), -2px 0 2px rgba(0,0,0,0.1);
	border-radius: 3px 3px 0 0;
	-webkit-border-radius: 3px 3px 0 0;
	-moz-border-radius: 3px 3px 0 0;
	-o-border-radius: 3px 3px 0 0;
	-webkit-transition: all 0.3s ease-out;
	-moz-transition: all 0.3s ease-out;
	-ms-transition: all 0.3s ease-out;
	-o-transition: all 0.3s ease-out;
	transition: all 0.3s ease-out;
}
</style>

<?php session_start(); ?>
<?php include 'koneksi.php'; ?>

<?php 

//mendapatkan id url
$id_produk=$_GET["id"];
$ambil=$koneksi->query("SELECT*FROM produk WHERE id_produk='$id_produk'");
$detail=$ambil->fetch_assoc();
$kategori=$detail["id_kategori"]; 
 ?>
 <?php 
$data=array();
 $slider=$koneksi->query("SELECT*FROM produk_foto WHERE id_produk='$id_produk'");
			while($s=$slider->fetch_assoc()) 
			{
  $data[]=$s;
}?>
<!DOCTYPE html>
<html>
<head>
	<title> TOKO MUTIARA </title>
	<link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="admin/assets/css/style.css">

</head>
<body>
<?php include 'menu.php'; ?>
 <?php include 'buttonup.php'; ?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v8.0" nonce="x8IbXLrR"></script>
<div class="wrap">	

	<div class="main">
	<!-- start content -->
	<div class="single">
			<!-- start span1_of_1 -->
			<div class="left_content">
			<div class="span1_of_1">
				<!-- start product_slider -->
				<div class="cycle-slideshow">
				    <span class="cycle-prev">&#9001;</span> <!-- Untuk membuat tanda panah di kiri slider -->
				    <span class="cycle-next">&#9002;</span> <!-- Untuk membuat tanda panah di kanan slider -->
				    <span class="cycle-pager"></span> 
				    	<?php foreach ($data as $key => $value): ?>
					    <img src="foto_produk/<?php echo $value["nama_produk_foto"]; ?>" id="myimage" >
					    <?php endforeach ?>
				</div>
				<script type="text/javascript" src="slider.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
				<script src="admin/assets/js/bootstrap.min.js"></script>
				<script src="admin/assets/js/jquery.min.js"></script>
				<script src="zoomsl.min.js"></script>
				<script >
					$('#myimage').imagezoomsl();
				</script>
				
				<!-- end product_slider -->
			</div>
			<!-- start span1_of_1 -->
			<div class="span1_of_1_des">
				  <div class="desc1"><br>
					<h3><?php echo $detail["nama_produk"]?></h3>	
					<h5 style="color: black;">Rp. <?php echo number_format($detail["harga_produk"]); ?></h5>
				
					<h4>Stok Produk : <?php echo number_format($detail["stok_produk"]); ?></h4>
					<?php 
					$data1=array();
					$a=$koneksi->query("SELECT*FROM pembelian_produk WHERE id_produk='$id_produk'");
					WHILE ($p=$a->fetch_assoc())
						{
							$data1[]=$p;
						}
					?>
					<?php $to=0; ?>
					<?php foreach ($data1 as $key => $val): ?>
					<?php $har=$val['jumlah'];
					$to+=$har ?>
					<?php endforeach ?>
					<h4>Terjual : <?php echo $to ?></h4>
					<form method="post">
						<div class="input-group">
							<input type="number" min="1" class="form-control"  name="jumlah" max="<?php echo number_format($detail["stok_produk"]); ?>" required ></input><br> 
                         
					<!-- Deskripsi --> 
					 Deskripsi Produk </label>
				    <div class="clear-shadow"></div>
				        <div class="content-2">
							<?php  echo $detail["deskripsi_produk"] ?>	
						</div>
			        </div>
			        </section>
					<!-- Deskripsi -->
							<div class="input-group-button"> 
								<button class="btn btn-primary" name="beli" ><i class="fa fa-shopping-cart"></i> Beli</button>
							</div>
						</div>
					</form>
					<?php  
					if (isset($_POST["beli"])) 
					{
						$jumlah=$_POST["jumlah"];
						$_SESSION["keranjang"][$id_produk]= $jumlah;
						mysqli_query($koneksi, "insert into pembelian_produk set 
						ukuran = '$_POST[ukuran]'");
						echo "<script> alert('Produk Masuk Ke Keranjang');</script>";
						echo "<script> location ='keranjang.php';</script>";
					}
					?>
					
						<div class="clear"></div>
					</div>
			   	 </div>
			   	</div>
			   	<div class="clear"></div>
			   	<!-- start tabs -->
		         	<!-- end tabs -->
			   	</div>
			   	<!-- start sidebar -->
			 <div class="left_sidebar">
			 	<?php 

				if (empty($_SESSION['keranjang']) OR !isset($_SESSION["keranjang"])):?>

				<?php endif ?>

					</div>
				</div>
					<!-- end sidebar -->
          	    <div class="clear"></div>
	       </div>

		</div>

	<!-- end content -->
	</div>
</div>
<br>
<?php include "footer.php"; ?>
</body>
</html>