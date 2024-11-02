<?php 
session_start();
include 'koneksi.php';
if (!isset($_SESSION["pelanggan"])) 
{
	echo "<script> alert('anda belum login');</script>";
	echo "<script> location ='login.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>TOKO JOGJA</title>
	<link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap.css">
	<link rel="stylesheet"  href="admin/assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>TOKO JOGJA</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	
</head>
<style>
input{
		background-color: black;
	}
h2 {
    padding: 10px;
	text-align: center;
}
.mytabs {
    display: flex;
    flex-wrap: wrap;
    max-width: 1400px;
    margin: 50px auto;
    padding: 10px;
}
.mytabs input[type="radio"] {
    display: none;
}
.mytabs label {
    padding: 9px;
    color: #fff;
    background: #011126;
    font-weight: bold;
}

.mytabs .tab {
    width: 100%;
    padding: 4px;
    background: #fff;
    order: 1;
    display: none;
}
.mytabs input:hover + label {
	background: #000080;
	color:#ffffff;
	font-weight: normal;
}
.mytabs .tab h3 {
    font-size: 2em;
}

.mytabs input[type='radio']:checked + label + .tab {
    display: block;
}

.mytabs input[type="radio"]:checked + label {
    background: #000080;
}
</style>
<body>
<?php include 'menu.php'; ?>

		<h2 style="text-align: center; color:black">Riwayat Belanja <?php  echo $_SESSION["pelanggan"]["nama_pelanggan"] ?></h2> 
		<div class="mytabs">
		    <input type="radio" id="tabfree" name="mytabs" checked="checked">
		    <label for="tabfree" ><i class="fa fa-clock"></i><br>Belum Bayar</label>
		    <div class="tab">
		      <table id="table" class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Tanggal</th>
							<th>Berat</th>
							<th>Total</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php $nomor=1;
						$id_pelanggan= $_SESSION["pelanggan"]['id_pelanggan'];
						 $ambil= $koneksi->query("SELECT *FROM pembelian WHERE id_pelanggan='$id_pelanggan' AND status_pembelian='belum bayar'");
						while($pecah=$ambil->fetch_assoc()){?>
						<tr>
							<td><?php echo $nomor; ?></td>
							<td><?php echo date("d F Y", strtotime($pecah['tanggal_pembelian']))?></td>
							<td><?php echo $pecah["totalberat"] ?> Gram</td>
							<td>Rp. <?php echo number_format($pecah["total_pembelian"]);?></td>
							<td>
								<a href="nota.php?id=<?php echo $pecah["id_pembelian"] ?>" class="btn btn-info">Nota</a>
								<a href="pembayaran.php?id=<?php echo $pecah["id_pembelian"] ?>" class= "btn btn-danger">Pembayaran</a>
							</td>
						</tr>
						<?php $nomor++;?>
						<?php  }?>
					</tbody>
				</table>
		    </div>


		    <input type="radio" id="tabsilver" name="mytabs">
		    <label for="tabsilver"><i class="fa fa-shipping-fast"></i><br>Dikirim</label>
		    <div class="tab">
		      <table id="table2" class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Tanggal</th>
							<th>Berat</th>
							<th>No Resi</th>
							<th>Total</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php $nomor=1;
						$id_pelanggan= $_SESSION["pelanggan"]['id_pelanggan'];
						 $ambil= $koneksi->query("SELECT *FROM pembelian WHERE id_pelanggan='$id_pelanggan' AND status_pembelian='barang dikirim'");
						while($pecah=$ambil->fetch_assoc()){?>
						<tr>
							<td><?php echo $nomor; ?></td>
							<td><?php echo date("d F Y", strtotime($pecah['tanggal_pembelian']))?></td>
							<td><?php echo $pecah["totalberat"] ?> Gram</td>
							<td>
								<?php if (!empty($pecah['resipengiriman'])): ?>
								<?php echo $pecah['resipengiriman']; ?>	
								<?php endif ?>
							</td>
							<td>Rp. <?php echo number_format($pecah["total_pembelian"]);?></td>
							<td>
								<a href="nota.php?id=<?php echo $pecah["id_pembelian"] ?>" class="btn btn-info">Nota</a>
								<a href="lihat_pembayaran.php?id=<?php echo $pecah["id_pembelian"]?>" class= "btn btn-success">Bukti</a>
								<a href="selesai.php?id=<?php echo $pecah["id_pembelian"]?>" class= "btn btn-success">Selesai</a>
							</td>
						</tr>
						<?php $nomor++;?>
						<?php  }?>
					</tbody>
				</table>
		    </div>
		</div>		   

<script src="admin/assets/js/jquery.min.js"></script>
<script src="admin/assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>

