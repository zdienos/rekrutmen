<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_otentikasi extends CI_Model {

	function cek_login($email,$pwd) {        
        $this->db->where("email", $email);
        $query = $this->db->get("tb_user");
        if($query->num_rows()>0){          
			$hashed_pwd = $query->row('password');
			if (password_verify($pwd, $hashed_pwd)) {			
				return true;
			}
        }
        else {
          	return false;
        }
      }


}

/* End of file app_model.php */
/* Location: ./application/models/app_model.php */
