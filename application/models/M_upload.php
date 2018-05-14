<?php
class M_upload extends CI_Model{
 
    function simpan_upload($judul,$tgl,$image){
        $data = array(
                'nama_gambar' => $judul,
                'tanggal_upload' => $tgl,
                'gambar' => $image
            );  
        $result= $this->db->insert('galeri',$data);
        return $result;
    }
     
}