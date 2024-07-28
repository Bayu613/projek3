<?php 

class Model_kategori extends CI_Model{
    public function data_jaket(){
        return $this->db->get_where('produk', array('kategori' => 'jaket'));
    }
    public function data_baju(){
        return $this->db->get_where('produk', array('kategori' => 'baju'));
    }
    public function data_shoes(){
        return $this->db->get_where('produk', array('kategori' => 'shoes'));
    }
    public function data_elektronik(){
        return $this->db->get_where('produk', array('kategori' => 'elektronik'));
    }
    public function data_celana(){
        return $this->db->get_where('produk', array('kategori' => 'celana'));
    }
}