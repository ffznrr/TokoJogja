<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="footer1.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <title>TOKO MUTIARA</title>
</head>
<Style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
body{
	line-height: 1.5;
	font-family: 'Poppins', sans-serif;
}
*{
	margin:0;
	padding:0;
	box-sizing: border-box;
}
.container{
	max-width: 1170px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
.footer{

  background: #011126;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #e91e63;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;

	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
  padding: 0;
	color: #ffffff;
	transition: all 0.5s ease;
}

.logofooter{
  width: 100px;
  height: 100px;
}
.footer1{
  text-align: center;
  color: white;
}
p{
  color: white;
}
/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}

</Style>
<body>
  <footer class="footer">
      <div class="container">
        <div class="row">
         <div class="footer-col">
                <h4>Tentang Kami</h4>
                <ul>
                     <p>AGEN SEMBAKO</p>
                     <p>Buka : Senin - MINGGU 09.00 - 22.00</p>
                </ul>
         </div>
         <div class="footer-col">
                <h4>Menu</h4>
                <ul>
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="carabelanja.php">Cara Belanja</a></li>
                    <li><a href="riwayat.php">Riwayat</a></li>
                    <li><a href="kontak.php">Kontak</a></li>
                </ul>
         </div>
            <h4></h4>
         <div class="footer-col">
                <ul><br><br><br><br>
                    <li><a href="login.php">Masuk</a></li>
                    <li><a href="daftar.php">Daftar</a></li>
                </ul>
         </div>
         <div class="footer-col">
                <h4>Kontak Info</h4>
                <div class="social-links">
                    <p> <i class="fa fa-map-marker"></i> Lokasi : </p>
                    <p>  Jalan Administrasi Negara 1, No. 6, Jakarta Pusat</p>
                    <p>  Jakarta, Indonesia</p><br>
                    <a href="bedurr69@gmail.com" title="Gmail"><i class="fab fa-google"></i></a>
  	 				<a href="https://www.instagram.com/ffznrr/"target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
  	 				<a href="https://wa.me/+6287865583050"target="_blank" title="Whatsapp"><i class="fa fa-phone"></i></a>
  	 			</div>
         </div>
        </div>
      </div>
      <div class="footer1"><strong> TOKO JOGJA &copy; 2023 - All Rights Reserved</strong></div>
  </footer>
</body>
</html>