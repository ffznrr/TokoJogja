<?php 
session_start();
include 'koneksi.php';
?>
<?php include 'menu.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>TOKO JOGJA</title>
	<link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap.css">
	
</head>
<style>
	body{
		background: center / contain no-repeat url("admin/assets/media/examples/firefox-logo.svg"),
            #eee 35% url("temaa.jpg");
	}
</style>

<body>
<div class="wrapper" style="margin-top: 40px;">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Login Pelanggan</h3>
				</div>
				<div class="panel-body">
					<form method="post">
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password" >
						</div>
						<button class="btn btn-primary" name="simpan">Masuk</button>
						<a href="daftar.php" class="btn btn-primary" ></i> Daftar</a>
					</form>
				</div>
			</div>
			
		</div>
		
	</div>
	
</div>

<?php
if (isset($_POST["simpan"]))
{
	$email=$_POST ["email"];
	$password=$_POST ["password"];
	$ambil=$koneksi->query("SELECT * FROM pelanggan
		WHERE email_pelanggan='$email' AND password_pelanggan='$password'");
	$akunyangcocok=$ambil->num_rows;
	if($akunyangcocok==1)
	{
		$akun =$ambil->fetch_assoc();
		$_SESSION["pelanggan"]=$akun;
		echo "<script> alert('anda berhasil masuk');</script>";
		echo "<script> location ='checkout.php';</script>";
	}
	else
	{
		echo "<script> alert('anda gagal masuk, cek akun anda');</script>";
		echo "<script> location ='login.php';</script>";
	}
}
?>
</body>
</html>