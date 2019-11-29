<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_pelamar extends CI_Model {

    function simpan_data_diri($id_user, $data) {   
        $this->db->where('id_user', $id_user);
        $this->db->update('tb_pelamar', $data);        
        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }        
    }

}//M_pelamar

