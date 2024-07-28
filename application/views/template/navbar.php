<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div style="background-color:rgb(20, 80, 155); ">

    <nav class="navbar navbar-expand-lg  " style="background-color:; width:60%; margin-left:20%;">
        <div class="container-fluid">
            <a href="<?php echo base_url('data_barang')?>" class="navbar-brand" href="#" style="color:white; font-weight:500; font-size: 1.6rem;">BayuShop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex" role="search">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" style="width:45rem; margin-left:5rem;">
                </form>
            </div>
            <div style="color:white; font-size:1.2rem; word-spacing:9px; margin-right:2rem;">
                <i class="fa-solid fa-cart-shopping"></i>
                
                 <?php echo anchor('auth/login','<i class="fa-regular fa-user" style="color:white;"></i>')?>
               
                
            </div>
        </div>
    </nav>
</div>