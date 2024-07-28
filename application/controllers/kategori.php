<?php 
class Kategori extends CI_Controller{
    public function shoes(){
        $data['shoes'] = $this->model_kategori->data_shoes()->result();
        $this->load->view('template_user/headerr');
        $this->load->view('template_user/navbar');
        $this->load->view('shoes',$data);
        
    }
    public function baju(){
        $data['baju'] = $this->model_kategori->data_baju()->result();
        $this->load->view('template_user/headerr');
        $this->load->view('template_user/navbar');
        $this->load->view('baju',$data);
    
    }
    public function celana(){
        $data['celana'] = $this->model_kategori->data_celana()->result();
        $this->load->view('template_user/headerr');
        $this->load->view('template_user/navbar');
        $this->load->view('celana',$data);
    
    }
    public function elektronik(){
        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
        $this->load->view('template_user/headerr');
        $this->load->view('template_user/navbar');
        $this->load->view('elektronik',$data);
    
    }
    public function jaket(){
        $data['jaket'] = $this->model_kategori->data_jaket()->result();
        $this->load->view('template_user/headerr');
        $this->load->view('template_user/navbar');
        $this->load->view('jaket',$data);
    }

    public function elektronik_all(){
        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
        $this->load->view('template_user/headerr');
        $this->load->view('template_user/navbar');
        $this->load->view('elektronik_all',$data);
    
    }

    public function baju_all(){
        $data['baju'] = $this->model_kategori->data_baju()->result();
        $this->load->view('template_user/headerr');
        $this->load->view('template_user/navbar');
        $this->load->view('baju_all',$data);
    
    }

    public function celana_all(){
        $data['celana'] = $this->model_kategori->data_celana()->result();
        $this->load->view('template_user/headerr');
        $this->load->view('template_user/navbar');
        $this->load->view('celana_all',$data);
    
    }

    public function jaket_all(){
        $data['jaket'] = $this->model_kategori->data_jaket()->result();
        $this->load->view('template_user/headerr');
        $this->load->view('template_user/navbar');
        $this->load->view('jaket_all',$data);
    
    }
}
?>