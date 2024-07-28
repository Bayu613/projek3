<?php
class detail_produk extends CI_Controller{
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('template/headerr');
        $this->load->view('detail_produk',$data);
    }
    
    public function detail($produk_id){
        $data ['barang'] = $this->model_barang->detail_produk($produk_id);
        $this->load->view('detail_produk',$data);
    }
}
?>   