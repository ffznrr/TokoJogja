<?php 
session_start();
include '../koneksi.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TOKO MUTIARA</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
</head>
<style>
  body{
    background: center / contain no-repeat url("../../media/examples/firfox-logo.svg"),
            #eee 35% url("../temaa.jpg");
  }
</style>
<body background>
<br><br>
<div>
<div class="wrapper" style="margin-top: 20px;">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Login Admin</h3>
				</div>
				<div class="panel-body">
					<form method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="pass" >
						</div>
						<button class="btn btn-primary" name="login">Masuk</button>
					</form>
                   <?php

          if(isset($_POST['login'])){
          $ambil = $koneksi->query("SELECT*FROM admin WHERE username='$_POST[user]' AND password='$_POST[pass]'");  

          $yangcocok = $ambil->num_rows;

          if ($yangcocok==1) {
            $_SESSION['admin'] = $ambil->fetch_assoc();
           echo "<div class='alert alert-info'>Berhasil Masuk</div>";
           echo "<meta http-equiv='refresh' content='1;url=index.php'>"; 
          }
          else{
            echo "<div class='alert alert-danger'>Gagal Masuk</div>";
           echo "<meta http-equiv='refresh' content='1;url=login.php'>"; 
          

          }
         }
          ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>
</body>
</html>






