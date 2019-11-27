<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_otentikasi extends CI_Model {

	function cek_login($email,$pwd) {        
        $this->db->where("email", $email);
        $query = $this->db->get("tb_user");
        if($query->num_rows()>0){
			foreach ($query->result() as $d) {
				$sess_data['nama_lengkap'] = $d->nama_lengkap;
				$sess_data['email'] = $d->email;
				$sess_data['role'] = $d->role;
				$sess_data['avatar'] = $d->avatar;				
				$hashed_pwd = $d->password;				
			}      			
			if (password_verify($pwd, $hashed_pwd)) {	
				$this->session->set_userdata($sess_data);		
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
