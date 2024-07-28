<?php

    class admin extends CI_Controller {
        public function index(){
            $data['barang'] = $this->model_barang->tampil_data()->result();
            $this->load->view('template_admin/navbar');
            $this->load->view('template_admin/headerr');
            $this->load->view('admin/index',$data);
        }
    }
?>