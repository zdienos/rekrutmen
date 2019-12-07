<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_pelamar extends CI_Model {

    function get_data_diri($id_user) {   
        $this->db->select('*');
        $this->db->from('tb_pelamar');
        $this->db->where('id_user', $id_user);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            $hasil = $query->row();
            return $hasil;
        } else {
            return false;
        }        
    }

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

