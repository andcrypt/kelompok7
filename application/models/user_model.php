  <?php  
  defined('BASEPATH') OR exit('No direct script access allowed');  
  class User_model extends CI_Model  
  {  
//    public function insertuser($data)  
//    {  
//     return $this->db->insert('user', $data);  
//    }  
//    public function verifyemail($key)  
//    {  
//     $data = array('status' => 1);  
//       $this->db->where('md5(email)', $key);  
//       return $this->db->update('user', $data);  
//    }
   
   public function register($enc_password){
      

    $data = array(
        'nama' => $this->input->post('nama'),
        'username' => $this->input->post('username'),
        'email' => $this->input->post('email'),
        'password' => $enc_password,
       
    );

    
    // Insert user
    return $this->db->insert('users', $data);
    
    redirect('homepage/registration','refresh');
    
}
public function login($username, $password){
 // Validasi
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('users');


        if($result->num_rows() == 1){
            return $result->row(0)->id_user;
        } else {
            return false;
        }

        }
}