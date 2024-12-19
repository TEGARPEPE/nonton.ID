<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
		$this->load->model('Beranda_model');
    }
	public function index() {
        $this->db->from('carosel');
        $carosel = $this->db->get()->result_array();

		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$konten = $this->Beranda_model->get_konten(10); // Ambil 10 konten terbaru untuk halaman utama

        

		$data = array(
			'judul_halaman' => 'nonton.ID',
			'konfig'        => $konfig,
			'kategori'      => $kategori,
			'konten'        => $konten,
            'carosel'      => $carosel,
		);
		
		$this->load->view('homepage',$data);
	

	}
	public function kategori($id_kategori = null) {
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
        // Validasi apakah id_kategori tidak kosong
        if ($id_kategori === null) {
            redirect('home'); // Redirect ke halaman utama jika tidak ada kategori yang dipilih
        }

        // Ambil data kategori untuk navigasi
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        // Ambil konten berdasarkan kategori
        $konten = $this->Beranda_model->getKontenByKategori($id_kategori);

        $this->db->where('id_kategori', $id_kategori);
        $this->db->from('kategori');
        $nama_kategori = $this->db->get()->row()->nama_kategori;


        $datas = array(
            'judul_halaman' => 'Kategori | nonton.ID',
			'konfig'        => $konfig,
            'kategori'      => $kategori,
            'konten'        => $konten,
            'selected_kategori' => $nama_kategori,
            
        );

        $this->load->view('kategori', $datas);
    }

    public function detail($id){
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori = b.id_kategori', 'left');
        $this->db->join('user c', 'a.username = c.username', 'left');
        $this->db->where('slug',$id);
		$konten = $this->db->get()->row();

		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
        
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->where_not_in('a.slug', $konten->slug);
        $this->db->order_by('judul', 'DESC');
        $another_konten = $this->db->get()->result_array();
    
		
		$data = array(
			'judul_halaman' => $konten->judul.' nonton.ID',
			'konfig'        => $konfig,
			'kategori'      => $kategori,
			'konten'        => $konten,
            'another_konten' => $another_konten

        );
        $this->load->view('detail',$data);
    }

    public function search()
    {
        // Ambil keyword dari input form
        $keyword = $this->input->post('keyword');

        $this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
        
    
        // Query pencarian dari database
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori = b.id_kategori', 'left');
        $this->db->like('a.judul', $keyword); // Cari berdasarkan judul
        $this->db->or_like('b.nama_kategori', $keyword); // Cari berdasarkan nama kategori
        $konten = $this->db->get()->result_array();
    
        // Data yang dikirim ke view
        $data = array(
            'judul_halaman' => 'Hasil Pencarian',
            'konten' => $konten,
            'keyword' => $keyword,
            'konfig'        => $konfig,
        );
    
        // Load view dan kirim data
        $this->load->view('searching', $data);
    }

    public function last(){
        $this->db->from('carosel');
        $carosel = $this->db->get()->result_array();

		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$konten = $this->Beranda_model->get_konten(10); // Ambil 10 konten terbaru untuk halaman utama

        

		$data = array(
			'judul_halaman' => 'nonton.ID',
			'konfig'        => $konfig,
			'kategori'      => $kategori,
			'konten'        => $konten,
            'carosel'      => $carosel,
		);
        $this->load->view('last',$data);
    }
    
    

}
