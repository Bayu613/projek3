<?php
 class dashboard extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role') != 'pembeli'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        }
    }

    public function tambah_keranjang($product_id)    {
        $product = $this->model_barang->find($product_id);
        $data = array(
            'id'      => $product->product_id,
            'qty'     => 1,
            'price'   => $product->harga,
            'name'    => $product->nama

    );
    
    $this->cart->insert($data);
    redirect('welcome');
    
    }
    public function keranjang()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }
    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('welcome/index');
    }
   public function pembayaran()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer'); 
    }
    public function proses_pesanan()
    {    
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('proses_pesanan');
        $this->load->view('templates/footer'); 
    }
    public function detail($produk_id)
    {
        $data['product'] = $this->model_barang->detail_prd($produk_id);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_product', $data);
        $this->load->view('templates/footer');   
    }

    public function Add_to_cart($id){
        $this->load->Produk_Models;
        $produk=$this->Produk_Models->find($id);
        $data = array(
            'id'    => $produk->produk_id,
            'qty'    => 1,
            'price'    => $produk->harga,
            'name'    => $produk->nama,
            'gambar'    => $produk->gambar,
        );
        $this->cart->insert($data);
        redirect('user/index');
    }

    public function cart (){
		$this->load->view('cart');
	}

	public function hapus_cart(){
		$this->cart->destroy();
		redirect('user/index');
	}


 }
?>