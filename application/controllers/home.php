<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_data');
	}
	
	public function index(){
		$this->load->database();
		$jumlah_data = $this->m_data->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'home/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 3;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['event'] = $this->m_data->data($config['per_page'],$from);
		$this->load->view('v_home',$data);
	}
}

