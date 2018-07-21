<?php
class M_upload extends CI_Model{
 
    function simpan_upload($judul,$tgl,$image){
        $data = array(
                'nama_foto' => $judul,
                'tanggal_upload' => $tgl,
                'gambar' => $image,
                'id_user' => $this->session->userdata('id_user'),
            );  
        $result= $this->db->insert('galeri',$data);
        return $result;
    }
     
}