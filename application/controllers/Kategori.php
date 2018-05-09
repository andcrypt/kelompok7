<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	function __construct()
    {
        parent::__construct();
            $this->load->helper('url');

    }
	
	public function index()
	{
	  $this->load->view('user/header');
	  $this->load->view('user/home');
	  $this->load->view('user/footer');
	
	}

	//load kategori
	public function kategori()
	{
		$this->db->order_by('id_kategori', 'desc');

		$kategori =  $this->db->get('kategori')->result_array();
		$data = array(
			'kategori' => $kategori,
		);
	  $this->load->view('user/header');
	  $this->load->view('user/kategori',$data);
	  $this->load->view('user/footer');
	
	}

	//load 1 form untuk edit dan create
	function form_kategori($id='')
	{
		$data['kategori'] = '';
		if($id != '')
		{
			 $data['kategori'] = $this->db->get_where('kategori',array('id_kategori'=>$id))->row_array();
			 $data['id'] = $id;
		
		}
	
	   $this->load->view('user/header',null);
	   $this->load->view('user/form_kategori',$data);
	   $this->load->view('user/footer');
	}

	function add_kategori()
{
    $data = $this->input->post();
    $add['nama_kategori'] = $data['nama_kategori'];
	$add['deskripsi'] = $data['deskripsi'];

    $this->db->insert('kategori',$add);
    redirect(base_url().'kategori/kategori');
}

	function edit_kategori($id)
{

    $data = $this->input->post();
    $add['nama_kategori'] = $data['nama_kategori'];
	$add['deskripsi'] = $data['deskripsi'];
	
    $this->db->update('kategori',$add, array('id_kategori' => $id));
    redirect(base_url().'kategori/kategori');
}

function remove_kategori($id)
{
    if($this->db->delete('kategori',array('id_kategori' => $id)))
    {
         redirect(base_url().'kategori/kategori');
    }
   
}
}
