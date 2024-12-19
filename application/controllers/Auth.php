<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('login');
	}

    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->db->from('user');
        $this->db->where('username',$username);
        $cek = $this->db->get()->row();
        if($cek==NULL){
            
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Username tidak ditemukan
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('auth');
        }else if($password==$cek->$password){
            $data = array(
                'id_user' => $cek->id_user,
                'username' => $cek->username,
                'nama' => $cek->nama,
                'level' => $cek->level,
            );
            $this->session->set_userdata($data);
            if($this->session->userdata['level']=='User'){
                redirect('home');
            }else if($this->session->userdata['level']=='Admin'){
                redirect('admin/home');
            }
        }
        else{
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Password tidak sesuai
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('auth');
        }

    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('auth');
    }
}
