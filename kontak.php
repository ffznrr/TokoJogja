<?php 
session_start();
include 'koneksi.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TOKO JOGJA</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<Style>
	 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

.content-top{
	border-bottom: 1px solid #F0F0F0;
	margin-bottom: 3px;
	background:#fff;
}

.wrap{
	width:80%;
	margin:0 auto;
}
.map{
	border:1px solid #C7C7C7;
	margin-bottom:15px;
}
body{
	line-height: 1.5;
	font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
h2{
	text-align: center;
}

.contact-info{
  display: flex;
  width: 100%;
  max-width: 1200px;
  align-items: center;
  justify-content: center;
  padding: 0 20px;
}


.card{
  background: #011126;
  padding: 0 20px;
  margin: 0 10px;
  width: calc(33% - 20px);
  height: 200px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  color: #fff;
  cursor: pointer;
}

.card-icon{
  font-size: 28px;
  background:  #000080;
  width: 60px;
  height: 60px;
  text-align: center;
  line-height: 60px !important;
  border-radius: 50%;
  transition: 0.3s linear;
}

.card:hover .card-icon{
  background: none;
  color:  #666;
  transform: scale(1.6);
}

.card p{
  margin-top: 20px;
  font-weight: 300;
  letter-spacing: 2px;
  max-height: 0;
  opacity: 0;
  transition: 0.3s linear;
}

.card:hover p{
  max-height: 40px;
  opacity: 1;
}


@media screen and (max-width:800px) {
  .contact-info{
    flex-direction: column;
  }
  .card{
    width: 100%;
    max-width: 300px;
    margin: 10px 0;
  }
}
</Style>
<?php include 'menu.php' ?>
<body>
<br>
	<h2>Kontak Kami</h2><br>
     <div class="content-top">
			<div class="wrap">
				 <div class="map">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.4840891885265!2d106.99015661515313!3d-6.3710198206543724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6993871aa43fdf%3A0xe1e633c6faf71917!2sWartuy%20Street!5e0!3m2!1sid!2sid!4v1689358272081!5m2!1sid!2sid" width="1840" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				  </div>
	  <div class="contact-info">
     	 <div class="card">
       	 <i class="card-icon far fa-envelope"></i>
      	  <p><a href="ffznrr@gmail.com"></a>ffznrr@gmail.com</p>
    	  </div>
      	<div class="card">
     		   <i class="card-icon fab fa-instagram"></i>
      		  <p><a href="https://www.instagram.com/ffznrr/" target="_blank" title="Instagram"></a>TOKO JOGJA</p>
      	</div>
     	 <div class="card">
      		  <i class="card-icon fas fa-phone"></i>
       		 <p> <a href="https://wa.me/+6285211271296" target="_blank" title="Whatsapp"></a>+6287865583050</p>
     	 </div>
    	  <div class="card">
      		  <i class="card-icon fas fa-map-marker-alt"></i>
      		  <p><a href="https://maps.app.goo.gl/3VU3BXsq4uU4aGB37"></a>Jalan Administrasi Negara 1, No. 6, Jakarta Pusat</p>
    	  </div>
	    </div>
	</div>
</div>
	<br>
</body>
</html>

    	
    	
            