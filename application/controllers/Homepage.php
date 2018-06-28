<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('M_Galeri');
	}

	public function index()
	{
		$limit_per_page = 4;

		$start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

		$total_records = $this->M_Galeri->get_total();

		if ($total_records > 0) {
			$data["galeri"] = $this->M_Galeri->get_all_galeri($limit_per_page, 
				$start_index);

			$config['base_url'] = base_url() . 'homepage/index/';
			$config['total_rows'] = $total_records;
			$config['per_page'] = $limit_per_page;
			$config["uri_segment"] = 3;

			$this->pagination->initialize($config);

			$data["links"] = $this->pagination->create_links();
		}
		$data['kategori'] = $this->db->get('kategori')->result();
		$data['event'] = $this->db->order_by('tanggal_mulai')->get('event')->result();
		$this->load->view('homepage/beranda',$data);
	}
	public function registrasi()
	{
		$this->load->view('homepage/registration');
	}
	public function login()
	{
		$this->load->view('homepage/login');
	}
	public function pesan($id)
	{
		$this->load->view('homepage/pesan');
	}
}
