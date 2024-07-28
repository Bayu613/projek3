<?php
class auth extends CI_Controller {
    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username wajib diisi!']);
        $this->form_validation->set_rules('password', 'password', 'required', ['required' => 'password wajib diisi!']);

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/headerr');
            $this->load->view('form_login');
        }else{
            $auth = $this->model_auth->cek_login($this->input->post('username'), $this->input->post('password'));
            var_dump($auth); 

            if($auth == [])
            {
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau Password Anda Salah!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('role', $auth->role);

                switch($auth->role){
                    case 0 : redirect('user');
                                break;
                    case 1 : redirect('data_barang');
                                break;
                    default: break;
                }

            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
?>