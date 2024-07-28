<?php

class Index extends CI_Controller {

    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('template/navbar');
        $this->load->view('template/headerr');
        $this->load->view('index',$data);
    }

    public function index_all()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('template/navbar');
        $this->load->view('template/headerr');
        $this->load->view('index_all',$data);
    }
    
    public function wa ($produk_id)
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $data ['barang'] = $this->model_barang->wa($produk_id);
        $this->load->view('wa',$data);

    }

    public function wa2 ()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('wa2',$data);

    }
}

?>