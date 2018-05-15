<?php 
 
class M_data extends CI_Model{
	function data($number,$offset){
		return $query = $this->db->get('event',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('event')->num_rows();
	}
}