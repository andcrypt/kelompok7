<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Galeri extends CI_Model {

	
	public function get_all_galeri( $limit = FALSE, $offset = FALSE )
   {
       // Jika variable $limit ada pada parameter maka kita limit query-nya
       if ( $limit ) {
           $this->db->limit($limit, $offset);
       }
       // Urutkan berdasar tanggal
       $this->db->order_by('galeri.tanggal_upload', 'DESC');
      
       $query = $this->db->get('galeri');

       // Return dalam bentuk object
       return $query->result_array();
   }

   public function get_total()
   {
       return $this->db->count_all("galeri");
   }


}
