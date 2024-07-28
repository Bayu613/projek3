<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div style="background-color:rgb(20, 80, 155); ">

    <nav class="navbar navbar-expand-lg  " style="background-color:; width:60%; margin-left:20%;">
        <div class="container-fluid">
            <a href="<?php echo base_url('user/index')?>" class="navbar-brand" href="#" style="color:white; font-weight:500; font-size: 1.6rem;">BayuShop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex" role="search">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" style="width:45rem; margin-left:5rem;">
                </form>
            </div>
            <div style="color:white; font-size:1.2rem; word-spacing:9px; margin-right:2rem;">
                <div style="position:relative;top:0.8rem; left:1rem">
                    <?php
                            $Keranjang = '<button type="button" class="btn btn-primary position-relative">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span class="badge bg-danger position-absolute top-0 start-100 translate-middle">'. $this->cart->total_items().'</span>
                            </button>';
                            ?>
                        <?= anchor('dashboard/cart',$Keranjang) ?>
                        <?php echo anchor('auth/logout','Logout','style="text-decoration:none; color:white; font-size:15px;"')?>
                    </div>
                    
                    <div style="position:relative;left:25rem;bottom:2rem; font-size:15px;"><?php echo $this->session->userdata('username')?></div>
                </div>
                
            </div>
        </nav>
</div>