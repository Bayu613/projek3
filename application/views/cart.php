<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Keranjang</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
	<div class="container-fluid">
		<h4>Keranjang Belanja</h4>
		<table class="table table-bordered table-striped table-hover ">
			<tr>
				<th>No</th>
				<th>Nama Product</th>
				<th>Jumlah</th>
				<th>Harga</th>
				<th>Sub-total</th>
			</tr>

			<?php 
			$no=0;
			foreach($this->cart->contents() as $items):
			
			?>
			<tr>
				<td><?= $no+=1 ?></td>
				<td><?= $items['name'] ?></td>
				<td><?= $items['qty'] ?></td>
				<td align="right">Rp.<?= number_format($items['price'],0,',','.') ?></td>
				<td align="right">Rp.<?= number_format($items['subtotal'],0,',','.') ?></td>
			</tr>

			<?php endforeach; ?>
			<tr>
				<td colspan="4"></td>
				<td align="right">
					Rp.<?= number_format($this->cart->total(),0,',','.') ?>
				</td>
			</tr>
		</table>
		<div align="right">
			
			<a href="<?= site_url('dashboard/hapus_cart')?>">
				<div class="btn btn-dark  p-3 rounded-0 text-warning ">
					Hapus keranjang
				</div>
			</a>
			<a href="<?= site_url('user/index')?>">
				<div class="btn btn-dark  p-3 rounded-0 text-warning ">
					Lanjutkan Belanja
				</div>
			</a>
			<a href="<?= site_url('index/wa2')?>">
				<div class="btn btn-dark  p-3 rounded-0 text-warning ">
					Lanjutkan Pembayaran
				</div>
			</a>
			
				<!-- Button trigger modal -->
				
		</div> 
	</div>
<!-- Modal -->
	<div class="modal fade" id="pesan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<h1 class="modal-title fs-5" id="staticBackdropLabel">Pembayaran</h1>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<div class="col-md-8 btn-sm btn-danger">
				<?php 
				$grand_total = 0;
				if($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $item ){
						$grand_total = $grand_total + $item['subtotal'];
					}
				echo 'Total Belanjaan anda adalah = Rp.'.number_format($grand_total,0,',','.');
				}
				?>
				<form action="<?= base_url('index.php/dashboard/pembayaran') ?>" method="post">
				<div class="form-grup">
					<label for="" class="text-left">Nama Lengkap : </label>
					<input type="text" class="form-control" name="nama" id="" placeholder="Isi nama lengkap anda" required>
				</div>
				<div class="form-grup">
					<label for="">Alamat Lengkap : </label>
					<input type="text" class="form-control" name="alamat" id="" placeholder="Isi alamat lengkap anda" required>
				</div>
				<button class="btn btn-sm btn-primary mt-3 text-center w-25 mb-4" type="submit">Kirim</button>
			</form>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			
		</div>
		</div>
	</div>
	</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>