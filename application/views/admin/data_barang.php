<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>



<div class="container-fluid">
<button type="button" class="btn btn-primary mt-4 mb-4" data-bs-toggle="modal" data-bs-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i>
  Tambah Barang
</button>
   

<div class=" row text-center" style=" margin-bottom:10rem;">
			<?php foreach ($barang as $brg ) : ?>
				<div class="card border-0 rounded-0 shadow ml-4 mt-4" style="width: 13.1rem;  ">
					<a ><img style="width:112%; height:190px; position:relative;right:6%;" src="<?php echo base_url(). '/upload/' . $brg->gambar ?>" class="card-img-top" ></a>
						<div class="card-body mt-1 mb-3">
							<div class="row">
								<div class="">
									<h8 class="card-title" style="font-size:1rem; "><?php echo $brg->nama ?></h8>
									</div>
							</div>
						</div>
						<div class="row align-items-center text-center g-0"style="display:flex;">
                    <div class="col-7">
                    <?php echo anchor ('data_barang/hapus/' . $brg->produk_id,'<h class="btn btn-dark w-100 p-3 rounded-0 text-warning " style="font-size:10px; margin-left:5.6rem; position:relative;top:3.09rem;">H A P U S')?>
							      <?php echo anchor ('data_barang/edit/' . $brg->produk_id,'<h class="btn btn-dark w-100 p-3 rounded-0 text-warning " style="font-size:10px; margin-right:5rem; position:relative;right:0.8rem;">E D I T ')?>
					        </div>
					    </div>
					</div>
	<?php endforeach; ?>
</div>

</div>
</div>
<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH PRODUK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <form action="<?php echo base_url(). 'data_barang/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>NAMA BARANG</label>
                <input type="text" name="nama" class="form-control">
            </div>  
            <div class="form-group">
                <label>KATEGORI</label>
                <input type="text" name="kategori" class="form-control">
            </div>  
            <div class="form-group">
                <label>HARGA</label>
                <input type="text" name="harga" class="form-control">
            </div>  
            <div class="form-group">
                <label>STOK</label>
                <input type="text" name="stock" class="form-control">
            </div>  
            <div class="form-group">
                <label>DESKRIPSI</label>
                <input type="text" name="deskripsi" class="form-control">
            </div>  
            <div class="form-group">
                <label>GAMBAR PRODUK</label><br>
                <input type="file" name="gambar" class="form-control">
            </div>  
            <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  
  </html>