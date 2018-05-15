<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
	function __construct()
    {
        parent::__construct();
			$this->load->helper('url');
			$this->load->model('m_upload');

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
	  $this->load->view('user/form_upload');
	  $this->load->view('user/footer');
	
	}



	
function do_upload(){
	$config['upload_path']="./assets/images";
	$config['allowed_types']='gif|jpg|png';
	$config['encrypt_name'] = TRUE;
	 
	$this->load->library('upload',$config);
	if($this->upload->do_upload("file")){
		$data = array('upload_data' => $this->upload->data());

		$judul= $this->input->post('judul');
		$tgl= $this->input->post('tgl');
		$image= $data['upload_data']['file_name']; 
		 
		$result= $this->m_upload->simpan_upload($judul,$tgl,$image);
		echo "success";
	} else {
		echo $this->upload->display_errors();
	}
 }

}
