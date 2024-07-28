<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA</h3>

    <?php foreach($barang as $brg) : ?>


        <form method="post" action="<?php echo base_url(). 'data_barang/update'?>">
    
        <div class="for-group">
            <label>NAMA</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $brg->nama?>">
        </div>

        <div class="for-group">
            <label>KATEGORI</label>
            <input type="hidden" name="produk_id" class="form-control" value="<?php echo $brg->produk_id?>">
            <input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori?>">
        </div>

        <div class="for-group">
            <label>HARGA</label>
            <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga?>">
        </div>

        <div class="for-group">
            <label>STOCK</label>
            <input type="text" name="stock" class="form-control" value="<?php echo $brg->stock?>">
        </div>
        <div class="for-group">
            <label>DESKRIPSI</label>
            <input type="text" name="deskripsi" class="form-control" value="<?php echo $brg->deskripsi?>">
        </div>

        <button type="submit" class="btn btn-primary btn-sm mt-3">SIMPAN</button>
        

        </form>
        <?php endforeach;?>
</div>