<?php
class registrasi extends CI_Controller{
    public function index()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required', ['required' => 'Nama wajib diisi!']);
        $this->form_validation->set_rules('username', 'username', 'required', ['required' => 'Username wajib diisi!']);
        $this->form_validation->set_rules('password', 'password', 'required', ['required' => 'Password wajib diisi!']);
        

        var_dump($_POST);
        
        if($this->form_validation->run() == FALSE){
            // var_dump(validation_errors());
        $this->load->view('template/headerr');
        $this->load->view('registrasi');

    
        }else{
            $data = array(
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'role' => 0,
            );
            $this->db->insert('user',$data);
            redirect('auth/login');
    }
}
}
?>