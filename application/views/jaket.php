
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>



<body style="height:2000px; ">
  <div class="container-fluid mt-3" style="width:63%;  ">
    <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner" style="height:30%; "> 
        <div class="carousel-item active">
          <img style="width:1175px; height:550px; border-radius:5px;" src="<?php echo base_url('assets/img/2.jpg') ?>"  >
        </div>
        <div class="carousel-item">
          <img style="width:1175px; height:550px; border-radius:5px;"  src="<?php echo base_url('assets/img/8.jpg') ?>" alt="...">
        </div>
        <div class="carousel-item">
          <img style="width:1175px; height:550px; border-radius:5px;"  src="<?php echo base_url('assets/img/10.jpg') ?>"  alt="...">
        </div>
		<div class="carousel-item">
          <img style="width:1175px; height:550px; border-radius:5px;"  src="<?php echo base_url('assets/img/3.jpg') ?>"  alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    
    <div class="" style="display:flex; text-align:center; justify-content:space-between; height:80px; position:relative;bottom:2rem;">
      <div style=" text-align:center; box-shadow:0 0 0 1px black; width:291px;">
        <div style="  margin-top:0.7rem;">
          <p style="font-weight:600; letter-spacing:2px; font-size:16px;">FASTED DELIVERY</p>
          <p style="font-size:14px; position:relative;bottom:1rem;">Delivery in 24/H</p>
        </div>
      </div>
      <div style="text-align:center; box-shadow:0 0 0 1px black; width:291px">
        <div style="  margin-top:0.7rem;">
          <p style="font-weight:600;  letter-spacing:2px;">24 HOURS RETURN</p>
          <p style="font-size:13px; position:relative;bottom:1rem;">100% money back guaraante</p>
        </div>
      </div>
      <div  style="text-align:center; box-shadow:0 0 0 1px black; width:291px">
        <div style="margin-top:0.7rem;">
          <p style="font-weight:600;  letter-spacing:2px; ">SECURE PAYMENT</p>
          <p style="font-size:14px; position:relative;bottom:1rem;">Your money is safe</p>
        </div>
      </div>
      <div style=" text-align:center; box-shadow:0 0 0 1px black; width:291px">
        <div style="margin-top:0.7rem;">
          <p style="font-weight:600;  letter-spacing:3px; font-size:16px; ">SUPPORT 24/7</p>
          <p style="font-size:13px; position:relative;bottom:1rem;">Live contact/message</p>
        </div>  
      </div>
    </div>
    
    <div style="text-align:center;  margin-top:10rem; font-weight:400; font-size:20px; width:100%; height:70px; background: rgb(194,194,194);
background: linear-gradient(0deg, rgb(20,80,155) 8%, rgb(255,255,255) 10%);  box-shadow:0 0 15px 2px  rgb(194,194,194);">
	<p style="position:relative;top:15px; color:rgb(20,80,155); font-weight:600;">
		J A K E T
	</p>
    </div><br>



	

	<div class="row text-center" style="margin-bottom:10rem;">
    <?php
    $max_items = 10; // mkaksimal item yang ditampilkan
    $count = 0;
    foreach ($jaket as $brg) :
        if ($count >= $max_items) break; 
        $count++;
    ?>
        <div class="card border-0 rounded-0 shadow ml-4 mt-4" style="width: 13.1rem; text-decoration:none;">
            <a><img style="width:112%; height:190px; position:relative;right:6%;" src="<?php echo base_url(). '/upload/' . $brg->gambar ?>" class="card-img-top"></a>
            <div class="card-body mt-1 mb-3">
                <div class="row">
                    <div class="">
                        <?php echo anchor('detail_produk/detail/' . $brg->produk_id, '<h8 class="card-title" style="font-size:1rem; color: rgb(85, 84, 84); text-decoration:none; font-size:13px;">'.$brg->nama.'</h8>', 'style="text-decoration:none;"') ?>
                    </div>
                </div>
            </div>
            <h9 style="font-size:12px; width:100px; margin-top:10px; position:relative;top:35px; right:19px;"><small style="font-size:9px;">Rp</small><?php echo number_format($brg->harga,0,',','.') ?></h9>
            <div class="row align-items-center text-center g-0">
                <div class="col-4">
                </div>
                <div class="col-8">
                    <?php echo anchor('index.php/dashboard/Add_to_cart/' . $brg->produk_id, '<h class="btn btn-dark w-100 p-3 rounded-0 text-warning " style="font-size:10px; margin-left:0.69rem;">ADD TO CART</h>') ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <div class="text-center mt-5 ">
    <a class="btn btn-dark rounded-0 " href="<?php echo base_url('kategori/jaket_all')?>" style="text-decoration:none;  color: white; position:relative;left:32.3rem; font-size:12px;">Lihat Semua</a>
</div>
</div>
	</div>






<style>
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
	background-color: rgb(20, 80, 155);
    padding: 70px 0;
	
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: white;
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
	background-color: red;
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
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}






</style>

  <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Alamat Toko</h4>
  	 			<ul>
  	 				<li><a href="#">Jl.Lawu Karanganyar</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>jam Kerja</h4>
  	 			<ul>
  	 				<li><a href="#">Senin-Jumat</a></li>
  	 				<li><a href="#">06.00-00.00</a></li>
  	 				<li><a href="#">Khusus Jumat: 13.00-21.00</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>kategori Produk</h4>
  	 			<ul>
				   <li><a href="<?php echo base_url('kategori/baju')?>">Baju</a></li>
				   <li><a href="<?php echo base_url('kategori/celana')?>">Celana</a></li>
				   <li><a href="<?php echo base_url('kategori/elektronik')?>">Elektronik</a></li>
				  
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				
                   <a href="https://www.instagram.com/bayoouuw/"><i style="position:relative;top:0.7rem;" class="fab fa-instagram"></i></a>
  	 				<a href="https://www.facebook.com/profile.php?id=100088285317893"><i style="position:relative;top:0.7rem;" class="fab fa-facebook"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>


    
    
    
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
  </html>