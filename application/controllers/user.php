<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct()
    {
        parent::__construct();
			$this->load->helper('url','form');
			$this->load->library('form_validation');
			//$this->load->model('m_upload');

    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
	  $this->load->view('user/header');
	  $this->load->view('user/home');
	  $this->load->view('user/footer');
	
	}

	//load event
	public function event()
	{
		$this->db->order_by('id_event', 'desc');

		$event =  $this->db->get('event')->result_array();
		$data = array(
			'event' => $event,
		);
	  $this->load->view('user/header');
	  $this->load->view('user/event',$data);
	  $this->load->view('user/footer');
	
	}

	//load 1 form untuk edit dan create validasi
	function form_event($id='')
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_event','Nama','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('deskripsi','Deskripsi','required');
		$this->form_validation->set_rules('kategori','Kategori','required');
		$this->form_validation->set_rules('tanggal_mulai','Tanggal Mulai','required');
		$this->form_validation->set_rules('tanggal_selesai','Tanggal Akhir','required');
		$this->form_validation->set_rules('waktu_mulai','Waktu Mulai','required');
		$this->form_validation->set_rules('waktu_akhir','Waktu Selesai','required');
		$this->form_validation->set_rules('id_galeri','Galeri','required');
 
		if($this->form_validation->run() != false){
			echo "Form oke bos";
		}else{
			//$this->load->view('user/form_event');
			$data['event'] = '';
			if($id != '')
			{
				$data['event'] = $this->db->get_where('event',array('id_event'=>$id))->row_array();
				$data['id'] = $id;
			
			}
			$this->load->view('user/header',null);
			$this->load->view('user/form_event',$data);
			$this->load->view('user/footer');
		
		}	

	}

	public function validasi()
	{
		
	
	}


	function add_event() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_event','Nama','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('deskripsi','Deskripsi','required');
		$this->form_validation->set_rules('kategori','Kategori','required');
		$this->form_validation->set_rules('tanggal_mulai','Tanggal Mulai','required');
		$this->form_validation->set_rules('tanggal_selesai','Tanggal Akhir','required');
		$this->form_validation->set_rules('waktu_mulai','Waktu Mulai','required');
		$this->form_validation->set_rules('waktu_akhir','Waktu Selesai','required');
		$this->form_validation->set_rules('id_galeri','Galeri','required');
 
		if($this->form_validation->run() != false){
			$data = $this->input->post();
			$add['nama_event'] = $data['nama_event'];
			$add['alamat'] = $data['alamat'];
			$add['deskripsi'] = $data['deskripsi'];
			$add['id_kategori'] = $data['kategori'];
			$add['tanggal_mulai'] = $data['tanggal_mulai'];
			$add['tanggal_selesai'] = $data['tanggal_akhir'];
			$add['waktu_mulai'] = $data['waktu_mulai'];
			$add['waktu_akhir'] = $data['waktu_akhir'];
			$add['id_galeri'] = $data['galeri'];
	
			$this->db->insert('event',$add);
			redirect(base_url().'user/event');
		} else {
			echo validation_errors();
		}
	}

	function edit_event($id)
{

    $data = $this->input->post();
    $add['nama_event'] = $data['nama_event'];
    $add['alamat'] = $data['alamat'];
    $add['deskripsi'] = $data['deskripsi'];
	$add['id_event'] = $data['event'];
	$add['tanggal_mulai'] = $data['tanggal_mulai'];
    $add['tanggal_akhir'] = $data['tanggal_akhir'];
	$add['waktu_mulai'] = $data['waktu_mulai'];
	$add['waktu_akhir'] = $data['waktu_akhir'];
	$add['id_galeri'] = $data['galeri'];

    $this->db->update('event',$add, array('id_event' => $id));
    redirect(base_url().'user/event');
}

function remove_event($id)
{
    if($this->db->delete('event',array('id_event' => $id)))
    {
         redirect(base_url().'user/event');
    }
   
}

	


}
