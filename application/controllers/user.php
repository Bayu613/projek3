<?php

class User extends CI_Controller {

    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('template_user/navbar');
        $this->load->view('template_user/headerr');
        $this->load->view('user',$data);
    }
    
    public function wa ($produk_id)
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $data ['barang'] = $this->model_barang->wa($produk_id);
        $this->load->view('wa',$data);

    }

}

?>