




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
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner" style="height:30%;"> 
        <div class="carousel-item active">
          <img style="width:1175px; height:500px; border-radius:15px;" src="<?php echo base_url('assets/img/1.jpg') ?>"  >
        </div>
        <div class="carousel-item">
          <img style="width:1175px; height:500px; border-radius:15px;"  src="<?php echo base_url('assets/img/2.jpg') ?>" alt="...">
        </div>
        <div class="carousel-item">
          <img style="width:1175px; height:500px; border-radius:15px;"  src="<?php echo base_url('assets/img/3.jpg') ?>"  alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    
    <div class="mt-4" style="display:flex; text-align:center; justify-content:space-between; height:80px;">
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
    
    <div style="text-align:center; margin-left:45%; margin-top:6rem; font-weight:600; font-size:20px;  height:1px; width:120px">
      P R O D U K
    </div><br>



	


		<div class=" row text-center ml-2" style="margin-top:6rem; margin-bottom:10rem;">
			<?php foreach ($barang as $brg ) : ?>
				<div class="card border-0 rounded-0 shadow ml-4 mt-4" style="width: 16rem;">
					<a href="<?php echo site_url('../index.php') ?>"><img style="width:100%; height:190px; margin-right:2rem;" src="<?php echo base_url(). '/upload/' . $brg->gambar ?>" class="card-img-top" ></a>
						<div class="card-body mt-3 mb-3">
							<div class="row">
								<div class="col-10">
									<h4 class="card-title"></h4>
										<p class="card-text">
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										<i class="bi bi-star-fill text-warning"></i>
										(123)
										</p>
								</div>
							<div class="col-2">
						<i class="bi bi-bookmark-plus fs-2"></i>
					</div>
				</div>
    		</div>
    <div class="row align-items-center text-center g-0">
		<div class="col-4">
			<h5>$129</h5>
        </div>
        <div class="col-8">
			<a href="#" class="btn btn-dark w-100 p-3 rounded-0 text-warning">ADD TO CART</a>
        </div>
    </div>
</div>
<?php endforeach; ?>
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




</style>




    
    
    
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
