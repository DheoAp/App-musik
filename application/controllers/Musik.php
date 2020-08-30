<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musik extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_musik');
		$this->load->library('form_validation');

	}

	public function index()
	{
		$data['judul'] = 'App Musik';
		$data['tbl_musik'] = $this->Model_musik->getDataMusik();
		$this->load->view('template/header',$data);
		$this->load->view('musik',$data);
		$this->load->view('template/footer');
	}

	public function Tambah()
	{
		$data['judul'] = 'Tambah Musik';	
		$data['tbl_genre'] = $this->Model_musik->AllGenre();

		$this->form_validation->set_rules('nama_band', 'Nama Band', 'required');
		$this->form_validation->set_rules('judul_musik', 'Judul Musik', 'required');
		$this->form_validation->set_rules('id_genre', 'Genre', 'required');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('template/header',$data);
			$this->load->view('tambah',$data);
			$this->load->view('template/footer');
		}else{
			$this->Model_musik->tambahMusik();
			$this->session->set_flashdata('flash','Ditambahkan');
			redirect('musik');
		}		
	}

	public function Hapus($id)
	{
		$this->Model_musik->hapusMusik($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('musik');

	}

	public function Ubah($id)
	{
		$data['judul'] = 'Ubah Musik';	
		$data['tbl_genre'] = $this->Model_musik->AllGenre('');
		$data['tbl_musik'] = $this->Model_musik->getMusikById($id
	);
		$this->form_validation->set_rules('nama_band', 'Nama Band', 'required');
		$this->form_validation->set_rules('judul_musik', 'Judul Musik', 'required');
		$this->form_validation->set_rules('id_genre', 'Genre', 'required');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('template/header',$data);
			$this->load->view('ubah',$data);
			$this->load->view('template/footer');
		}else{
			$this->Model_musik->ubahMusik();
			$this->session->set_flashdata('flash','Diubah');
			redirect('musik');
		}		
	}
}
