<?php

class Produk_Models extends CI_Model{


    public function tampilan_data(){
        $query = $this->db->get('produk');
		return $query->result();
    }
    
    public function find($id){
		$result = $this->db->where('produk_id',$id)
						   ->limit(1)
						   ->get('produk');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}
}

?>