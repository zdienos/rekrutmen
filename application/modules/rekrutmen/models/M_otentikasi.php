<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_otentikasi extends CI_Model {

	function cek_login($email) {        
        $this->db->where('email', $email);
		$query = $this->db->get('tb_user');
		if($query->num_rows()>0) {		
			return $query->row_array();
		} else {
			return false;
		}       
	}

	function cek_email($email) {
		$this->db->where('email', $email);
		$query = $this->db->get('tb_user');
		if($query->num_rows()>0) {		 	
			return true;
		} else {
			return false;
		}
	}
	
	function tambah_user($data) {
		$this->db->insert('tb_user', $data);
		$last_id = $this->db->insert_id();
        if($this->db->affected_rows() > 0) {
			$dpelamar = array (
				'id_user'		=> $last_id,
				'nama_lengkap'	=> $data['nama_lengkap']
			);
			$this->db->insert('tb_pelamar', $dpelamar);
        	if($this->db->affected_rows() > 0) {
			 	return true;
			}
		} else {
		 	return false;
		}
	}

	function aktivasi_user($email, $token) {
		$this->db->where('email', $email);
		$this->db->where('token', $token);
		$query = $this->db->get('tb_user');
		if($query->num_rows()>0){
			$this->db->set('active', 1);
			$this->db->set('token', '');
            $this->db->where('email', $email);
			$this->db->update('tb_user');
			return true;
		} else {
			//$this->session->set_flashdata('psn_error', 'Aktivasi gagal!');
			///redirect('daftar');
			//die ('gagalll aktivasi');
			return false;
		}
	}


}

/* End of file app_model.php */
/* Location: ./application/models/app_model.php */
