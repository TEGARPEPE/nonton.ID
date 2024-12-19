<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Konten extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('level')==NULL){
            redirect('auth');
        }
    }
	public function index()
	{
        $this->db->select('*')->from('kategori');
        $this->db->order_by('nama_kategori','ASC');
        $kategori = $this->db->get()->result_array();


        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tgl','DESC');
        $konten = $this->db->get()->result_array();


        $data = array(
            'judul_halaman' => 'Halaman Konten  ',
            'kategori'      => $kategori,
            'konten'      => $konten,
            
        );
		$this->template->load('layout/template','admin/konten_index', $data);
	}

    public function simpan(){
        $namafoto = date('YmdHis').'.jpg';  // Nama foto
        $namavideo = date('YmdHis') . '.' . pathinfo($_FILES['video']['name'], PATHINFO_EXTENSION);


            // konfigurasi foto
        $config['upload_path'] = 'assets/upload/konten/';
        $config['max_size'] = 3000 * 1024;
        $config['file_name'] = $namafoto;
        $config['allowed_types'] = '*';

        // Konfigurasi Video
        $config_video['upload_path']   = 'assets/upload/video';
        $config_video['allowed_types'] = 'mp4|avi|mov';
        $config_video['max_size']      = 5000000; // 500 MB
        $config_video['file_name']     = $namavideo;


        $this->load->library('upload',$config);

        // Upload foto
        if($_FILES['foto']['size']>=3000 * 1024){
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Ukuran foto lebih dari 500kb
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('admin/konten');
        }else if(!$this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }

         // Upload Video
        $this->upload->initialize($config_video);
        if (!$this->upload->do_upload('video')) {
            $this->session->set_flashdata('alert', 'Upload video gagal: ' . $this->upload->display_errors());
            redirect('admin/konten');
        } else {
            $video_data = $this->upload->data();
        }

        $this->db->from('konten');
        $this->db->where('judul',$this->input->post('judul'));
        $cek = $this->db->get()->result_array();
        if($cek==!NULL){
            
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Judul konten sudah ada
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('admin/konten');
        }
        $data = array(
            'judul' => $this->input->post('judul'),
            'keterangan' => $this->input->post('keterangan'),
            'id_kategori' => $this->input->post('id_kategori'),
            'tahun' => $this->input->post('tahun'),
            'link' => $this->input->post('link'),
            'slug' => str_replace(' ','-', $this->input->post('judul')),
            'username' => $this->session->userdata('username'),
            'tgl' => date('Y-m-d H:i:s'),
            'foto' => $namafoto,
            'video'       => $video_data['file_name'],
        );

        $this->db->insert('konten',$data);
        
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-circle me-2"></i>Konten Berhasil Disimpan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
        redirect('admin/konten');
    }


    public function hapus($id){
        $filename = FCPATH.'assets/upload/konten/'.$id;
        if(file_exists($filename)){
            unlink($filename);
        }
        $where= array('foto' => $id);
        $this->db->delete('konten',$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>Konten Berhasil Dihapus!!!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
        ');
        redirect('admin/konten');
    }

    public function edit($id){
        $this->db->select('*')->from('kategori');
        $this->db->order_by('nama_kategori','ASC');
        $kategori = $this->db->get()->result_array();

        $this->db->select('*')->from('konten');
        $this->db->where('foto', $id);
        $kategori = $this->db->get()->result_array();
        $data = array('kategori' => $kategori, 'judul_halaman' => 'Perbarui Konten');
        $this->template->load('layout/template','konten_edit', $data);  
    }

    public function update() {

        $namafoto = $this->input->post('nama_foto'); // Nama file baru
    
        // Konfigurasi upload foto
        $config['upload_path'] = 'assets/upload/konten/';
        $config['max_size'] = 500 * 1024; // 500 KB
        $config['file_name'] = $namafoto;
        $config['overwrite'] = true;
        $config['allowed_types'] = 'jpg|jpeg|png';
    
        $this->load->library('upload', $config);
    
        
        // Jika ada foto baru yang diunggah
            if ($this->upload->do_upload('foto')) {
                $uploadData = $this->upload->data();
                $data['foto'] = $uploadData['file_name'];
            } else {
                $this->session->set_flashdata('alert', 'Upload foto gagal: ' . $this->upload->display_errors());
                redirect('admin/konten');
            }
        $data = array(
            'judul' => $this->input->post('judul'),
            'keterangan' => $this->input->post('keterangan'),
            'id_kategori' => $this->input->post('id_kategori'),
            'tahun' => $this->input->post('tahun'),
            'link' => $this->input->post('link'),
            'slug' => str_replace(' ', '-', $this->input->post('judul')),
        );
        $where = array('id_konten' => $this->input->post('id_konten'),);
    
        $this->db->update('konten', $data, $where);
    
        $this->session->set_flashdata('alert', '<div class="alert alert-success">Konten berhasil diperbarui.</div>');
        redirect('admin/konten');
    }
    

    

}
