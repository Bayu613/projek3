<?php

class Model_barang extends CI_Model {
    public function tampil_data(){
        return $this->db->get('produk');
    }
    
    public function tambah_barang($data,$table){
        $this->db->insert($table,$data);
        return $this->db->get('produk');
    }

    public function edit_barang($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table) {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function detail_produk($produk_id){
        $result = $this->db->where('produk_id',$produk_id)->get('produk');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }

    public function wa($produk_id){
        $result = $this->db->where('produk_id',$produk_id)->get('produk');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }

    public function registrasi($data){
        
        return $this->db->insert('user',$data);
    }

    
}
?>