<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct()
    {
        parent::__construct();
			$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->load->model('user_model');

    }

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
			$add['id_event'] = $data['event'];
			$add['tanggal_mulai'] = $data['tanggal_mulai'];
			$add['tanggal_akhir'] = $data['tanggal_akhir'];
			$add['waktu_mulai'] = $data['waktu_mulai'];
			$add['waktu_akhir'] = $data['waktu_akhir'];
			$add['id_galeri'] = $data['galeri'];

    $this->db->update('event',$add, array('id_event' => $id));
	redirect(base_url().'user/event');
	} else {
	echo validation_errors();
	}
}

function remove_event($id)
{
    if($this->db->delete('event',array('id_event' => $id)))
    {
         redirect(base_url().'user/event');
    }
   
}

public function register(){
    $data['page_title'] = 'Pendaftaran EO';

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('username', 'Username', 
'required|is_unique[users.username]');
    $this->form_validation->set_rules('email', 'Email', 
'required|is_unique[users.email]');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('passwordkonfrim', 'Konfirmasi Password', 
'matches[password]');

if($this->form_validation->run() === FALSE){
    $this->load->view('homepage/registration', $data);
   
} else {
    // Encrypt password
    $enc_password = md5($this->input->post('password'));

    $this->user_model->register($enc_password);

    $this->session->set_flashdata('user_registered', 'Anda udah teregistrasi.');

    redirect('homepage/registration');
        }
    }

	public function login(){
        $data['page_title'] = 'Log In';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('homepage/login', $data);
        } else {
			$username = $this->input->post('username');
    // Get & encrypt password
    $password = md5($this->input->post('password'));

    // Login user
    $id_user = $this->user_model->login($username, $password);

    if($id_user){
        // Buat session
        $user_data = array(
            'id_user' => $id_user,
            'username' => $username,
            'logged_in' => true
		);
		$this->session->set_userdata($user_data);

        // Set message
        $this->session->set_flashdata('user_loggedin', 'You are now logged in');

        redirect('user');
    } else {
        // Set message
        $this->session->set_flashdata('login_failed', 'Login is invalid');

        redirect('user/login');
    }       
}
}

public function logout(){
	// Unset user data
	$this->session->unset_userdata('logged_in');
	$this->session->unset_userdata('id_user');
	$this->session->unset_userdata('username');

	// Set message
	$this->session->set_flashdata('user_loggedout', 'Anda sudah log out');

	redirect('user/login');
}

	


}
