<?php
class data_barang extends CI_controller {
    public function  index(){
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('template_admin/navbar');
        $this->load->view('template_admin/headerr');
        $this->load->view('admin/data_barang',$data);
    }

    public function tambah_aksi()
    {
        $nama = $this->input->post('nama');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stock = $this->input->post('stock');
        $deskripsi = $this->input->post('deskripsi');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar = ''){}else{
            $config['upload_path']='./upload';
            $config['allowed_types']='jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gambar Gagal Diupload";
            } else{
                $gambar=$this->upload->data('file_name');
            }
            }

            $data = array(
                'nama' => $nama,
                'kategori' => $kategori,
                'harga' => $harga,
                'stock' => $stock,
                'deskripsi'=> $deskripsi,
                'gambar' => $gambar
            );

            $this->model_barang->tambah_barang($data, 'produk');
            redirect('data_barang');
        }
        
        
        public function edit($id){
            $where = array('produk_id' => $id);
            $data['barang'] = $this->model_barang->edit_barang($where,'produk')->result();
            $this->load->view('template_admin/navbar');
            $this->load->view('template_admin/headerr');
            $this->load->view('admin/edit_barang',$data);
        }
        
        public function update(){
        $id     = $this->input->post('produk_id');
        $nama    = $this->input->post('nama');
        $kategori = $this->input->post('kategori');
        $harga     = $this->input->post('harga');
        $stock     = $this->input->post('stock');
        $deskripsi    = $this->input->post('deskripsi');
    
            $data = array(
                'nama' => $nama,
                'kategori' => $kategori,
                'harga' => $harga,
                'stock' => $stock,
                'deskripsi'=> $deskripsi,
            );
        
        $where = array (
            'produk_id' => $id
        );
        
        $this->model_barang->update_data($where,$data,'produk');
        redirect('data_barang');
    }

    public function hapus ($id){
        $where = array ('produk_id' => $id);
        $this->model_barang->hapus_data($where,'produk');
        redirect('data_barang');
    }
}

?>