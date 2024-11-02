<?php
session_start();
//koneksi ke database
include 'koneksi.php';
?>
<?php 
session_destroy();
echo "<script>alert('anda telah Keluar');</script>";
echo "<script>location='login.php';</script>";
 ?>