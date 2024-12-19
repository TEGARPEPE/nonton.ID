<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function simpan()
	{
		$data = array(
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'level' => $this->input->post('level'),
            'password' => $this->input->post('password'),
        );
        $this->db->insert('user',$data);
	}

    public function update(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'level' => $this->input->post('level')
        );
        $where = array (
            'id_user' => $this->input->post('id_user')
        );
        $this->db->update('user',$data,$where);     
    }
}
