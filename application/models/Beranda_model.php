<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda_model extends CI_Model {

    public function get_konten($limit = 6) {
        $this->db->select('a.*, b.nama_kategori, c.nama');
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori = b.id_kategori', 'left');
        $this->db->join('user c', 'a.username = c.username', 'left');
        $this->db->order_by('tahun', 'DESC'); // Urutkan berdasarkan tanggal terbaru
        $this->db->limit($limit);          // Batasi hasil maksimal 6
        return $this->db->get()->result_array(); // Kembalikan sebagai array
    }

    public function getKontenByKategori($id_kategori, $limit = 6) {
        $this->db->select('a.*, b.nama_kategori, c.nama');
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori = b.id_kategori', 'left');
        $this->db->join('user c', 'a.username = c.username', 'left');
        $this->db->where('a.id_kategori', $id_kategori); // Filter berdasarkan kategori
        $this->db->order_by('tgl', 'DESC');             // Urutkan berdasarkan tanggal terbaru
        $this->db->limit($limit);                       // Batasi jumlah konten
        return $this->db->get()->result_array();        // Kembalikan sebagai array
    }


    public function search($keyword) {
        $this->db->select('*');
        $this->db->from('konten'); // Ganti 'konten' dengan tabel yang ingin dicari
        $this->db->like('judul', $keyword); // Cari berdasarkan judul
        return $this->db->get()->result();
        
    }

    
}
