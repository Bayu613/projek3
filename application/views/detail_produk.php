
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css">
</head>
<style>
    * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
body{
    background: rgb(255,255,255);
background: linear-gradient(27deg, rgba(255,255,255,0.9808298319327731) 0%, rgba(227,227,227,1) 13%, rgba(222,222,222,1) 27%, rgba(207,207,207,1) 50%, rgba(168,168,168,1) 65%);
    background-position: center;
    background-repeat: no-repeat;
    height: 89vh;
    margin: 0;
    
}


</style>
<body>
 <div class="containe-fluid" style="margin-top:7rem; width:1300px; height:300px; position:relative;left:15%; " >
    <div class="card" style="box-shadow:0 0 15px 2px  white;">
    

        <div class="card-body">
      <?php foreach($barang as $brg): ?>
        <div class="row" >
            <div class="col-md-1">
                <img style="width:724%; height:100%;box-shadow:0 0 50px 1px  rgb(194,194,194); border-radius:2px;" src="<?php echo base_url(). '/upload/' . $brg->gambar ?>" class="card-img-top" >
                <p style="font-weight:200; position:relative;bottom:40rem; left:75rem;">Stock : <?php echo $brg->stock?></p>

        </div>
        <div class="col-md-8" style="position:relative;left:45%;">
            <table style="margin-top:10%;">
                <tr>
                    
                    <td style="position:relative;bottom:5rem; font-size:25px; font-weight:700;"><?php echo $brg->nama?></td>
                </tr>
                <tr  style="position:relative;bottom:4.5rem; color:purple;  font-weight:700; font-size:15px;">
                   
                    <td><div>Rp. <?php echo number_format($brg->harga,0,',','.')?></div></td>
                </tr>
                <tr>
                    <td style="font-weight:500;">Deskripsi :</td>
                </tr>
                <tr>

                    <td style="font-weight:400; width:400px; "><?php echo $brg->deskripsi?></td>
                </tr> 
                
                <tr style="position:relative;top:2rem;">
                    <td style="font-weight:500;">Kategori :</td>
                    <td style="font-weight:400; width:400px; position:relative;right:20.5rem;"><?php echo $brg->kategori?></td>
                </tr>  
                
                   
         
                
                <a href="<?php echo base_url('index/wa')?>" ><?php echo anchor ('index/wa/' . $brg->produk_id,'<h class="btn btn-dark  p-3 rounded-0 text-warning " style="font-size:13px; width:550px; position:relative;top:33rem;">Lanjutkan Pembayaran</h>')?></a>
            </table>
        </div>
    </div>
</div>
<?php endforeach;?>
</div>

</div>
  
</div>

</body>

</html>