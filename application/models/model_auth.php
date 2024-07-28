<?php
class model_auth extends CI_Model{
    public function cek_login($username, $password)
    {
        // $username = set_value('nama');
        // $password = set_value('password');

        $result   = $this->db->where('nama',$username)
                             ->where('password',$password)
                             ->limit(1)
                             ->get('user');
        if($result->num_rows() > 0){
            return $result->row();
        } else{
            return array();
        }
    }
}
?>