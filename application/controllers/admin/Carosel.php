<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carosel extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('level')==NULL){
            redirect('auth');
        }
    }
	public function index()
	{
        $this->db->select('*')->from('carosel');
        $carosel = $this->db->get()->result_array();

        $data = array(
            'judul_halaman' => 'Halaman Konten',
            'carosel'      => $carosel,
            
        );
		$this->template->load('layout/template','admin/carosel_index', $data);
	}

    public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path'] = 'assets/upload/carousel';
        $config['max_size'] = 1000 * 1024;
        $config['file_name'] = $namafoto;
        $config['allowed_types'] = '*';
        $this->load->library('upload',$config);
        if($_FILES['foto']['size']>=1000 * 1024){
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Ukuran foto lebih dari 1000kb
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('admin/carosel');
        }else if(!$this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }
        $data = array(
            'judul' => $this->input->post('judul'),
            'foto' => $namafoto,
        );
        $this->db->insert('carosel',$data);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-circle me-2"></i>Data Carousel Berhasil Disimpan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
        redirect('admin/carosel');
    }


    public function hapus($id){
        $filename = FCPATH.'assets/upload/carousel/'.$id;
        if(file_exists($filename)){
            unlink(FCPATH.'assets/upload/carousel/'.$id);
        }
        $where= array('foto' => $id);
        $this->db->delete('carosel',$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>Konten Berhasil Dihapus!!!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
        ');
        redirect('admin/carosel');
    }



}
