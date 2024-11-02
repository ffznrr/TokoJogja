<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="admin/assets/js/jquery-1.10.2.js"></script>
  <link rel="stylesheet" href="menu.css">
  <title>TOKO JOGJA</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
 
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }
  body{
    background-image: url(background-img.jpg);
    background-size: cover;
    background-attachment: fixed;
  }
  .navbarr{
    height: 70px;
    width: 100%;
    padding: 10px 20px;
    background-color: #011126;
    position: relative;
  }
  .navbarr .nav-header{
    display: inline;
  }
  .navbarr .nav-header .nav-logo{
    display: inline-block;
    
  }
  .navbarr .nav-header .nav-logo h1{
    color: white;
    margin: 0px;
    font-size: 30px;
    line-height: normal;
    font-weight: bold;
  }
  .navbarr .nav-links{
    display: inline;
    float: right;
    font-size: 16px;
    margin: 10px;
  }
   
  .navbarr .nav-links .loginBtn{
    display: inline-block;
    padding: 5px 15px;
    margin-left: 20px;
    font-size: 17px;
    color: rgb(9, 14, 90);
  }
  .navbarr .nav-links a {
    padding: 20px 20px 20px 20px;
    text-decoration: none;
    font-weight: 550;
    color: white;
    border-radius: 10px;
  }
  /* Hover effects */
  .navbarr .nav-links a:hover{
    background-color: #011135;
    color: white;
  }
   
  /* responsive navbar toggle button */
  .navbarr #nav-check, .navbarr .nav-btn{
    display: none;
  }
   
  @media (max-width:700px) {
    .navbarr .nav-btn{
      display: inline-block;
      position: absolute;
      top: 0px;
      right: 0px;
    }
    .navbarr .nav-btn label {
      display: inline-block;
      width: 80px;
      height: 70px;
      padding: 25px;
    }
    .navbarr .nav-btn label span {
      display: block;
      height: 10px;
      width: 25px;
      border-top: 3px solid white;
    }
    .navbarr .nav-btn label:hover, .navbarr #nav-check:checked ~ .nav-btn label {
     
      transition: all 0.5s ease;
    }
    .navbarr .nav-links{
      margin: 0%;
      position: absolute;
      display: block;
      text-align: center;
      width: 50%;
      background-color: #011126;
      transition: all 0.3s ease-in;
      overflow-y: hidden;
      top: 70px;
      right: 0px;
      z-index: 999;
    }
    .navbarr .nav-links a {
      display: block;
      background-color: #011126;
      color: white ;
    }
   
    /* when nav toggle button not checked */
    .navbarr #nav-check:not(:checked) ~ .nav-links {
      height: 0px;
    }
   
    /* when nav toggle button is checked */
    .navbarr #nav-check:checked ~ .nav-links {
      height: calc(100vh - 70px);
      overflow-y: auto;
    }
    .navbarr .nav-links .loginBtn {
      padding: 10px 40px ;
      margin: 20px;
      font-size:  15px;
      font-weight: bold;
      color: rgb(9, 14, 90);
    }
    /* Responsive dropdown code */
    .navbarr .nav-links .dropdown, .navbarr .nav-links .dropdown2 {
      float: none;
      width: 100%;
    }
    .navbarr .nav-links .drop-content, .navbarr .nav-links .drop-content2 {
      position: relative;
      background-color: rgb(220, 220, 250);
      top: 0px;
      left: 0px;
      border-radius: 10px;
    }
    /* Text color */
    .navbarr .nav-links .drop-content a {
      color: rgb(9, 14, 90);
    }  
   
  }
   
  /* Dropdown menu CSS code */
  .dropdown{
    position: relative;
    display: inline-block;
  }
  .drop-content, .drop-content2 {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 120px;
    font-size: 16px;
    top: 30px;
    z-index: 999;
    border-radius: 10px;
  }
  /* on hover show dropdown */
  .dropdown:hover .drop-content, .dropdown2:hover .drop-content2 {
    display: block;
  }
  /* drondown links */
  .drop-content a {
    padding: 12px 10px;
    border-bottom: 1px solid rgb(197, 197, 250);
    display: block;
    transition: all 0.5s ease !important;
    
  }
  .dropBtn .drop-content a:hover {
    background-color: rgb(230, 230, 230);
  }
  .dropdown:hover .dropBtn, .dropdown2:hover .dropBtn2 {
    background-color: rgba(0, 0, 0, 0.3);
  }
  .dropdown2 .drop-content2 {
    position: absolute;
    left: 120px;
    top: 126px;
  }
  .dropBtn2 i {
    margin-left: 15px;
  }

</style>

<body>

<div class="containe">
  
  <div class="navbarr">
 
    <!-- Navbar logo -->
    <div class="nav-header">
      <div class="nav-logo">
        <h1>TOKO JOGJA</h1>
      </div>
    </div>
 
    <!-- responsive navbar toggle button -->
    <input type="checkbox" id="nav-check">
    <div class="nav-btn">
      <label for="nav-check">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>
 
    <!-- Navbar items -->
    <div class="nav-links">
      <a href="index.php">Beranda</a>
      <a href="carabelanja.php">Cara Belanja</a>
      <a href="riwayat.php">Riwayat</a>
      <a href="kontak.php">Kontak</a>
      
    
      <?php 
include 'koneksi.php';
if (isset($_SESSION["pelanggan"])):?>
      <div class="dropdown">
        <a href="keranjang.php" style="background-color: #011145;"><i class="fa fa-shopping-cart" aria-hidden="true" ></i> Keranjang</a>
      </div>
      <a href="keluar.php" style="background-color: #781D1D;">Keluar</a>
  <?php 
$id_pelanggan= $_SESSION["pelanggan"]['id_pelanggan'];
$ambil= $koneksi->query("SELECT *FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");
$pecah=$ambil->fetch_assoc();?>
	
<?php else: ?>
 
       <a href="login.php"  style="background-color: #011145;">Masuk</a>
        <a href="daftar.php" style="background-color: #011145;">Daftar</a>
    

<?php endif ?> 

    </div>
 
  </div>
</div>

</body>
 
</html>