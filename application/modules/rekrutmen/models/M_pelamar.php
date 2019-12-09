<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_pelamar extends CI_Model {

    //data diri
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

    function simpan_data_diri($id_user, $field) {   
        $this->db->where('id_user', $id_user);
        $this->db->update('tb_pelamar', $field);                
        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }
    //end of data diri


    //data keluarga
    function simpan_data_keluarga($field) {     
        if(count(array_filter($field)) != 0) {        
            $this->db->insert('tb_keluarga', $field);
            if($this->db->affected_rows() > 0) {
                return true;        
            } else {            
                return false;
            }
        }
    }

    function get_data_keluarga($id_user) {   
        $this->db->select('k.id_keluarga,k.id_user,k.hubungan,k.nama,k.jenis_kelamin,k.usia,k.id_pendidikan,p.nama_pendidikan');
        $this->db->from('tb_keluarga k');
        $this->db->join('p_pendidikan p', 'p.id_pendidikan = k.id_pendidikan');
        $this->db->where('id_user', $id_user);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            $hasil = $query->result();
            return $hasil;
        } else {
            return false;
        }        
    }

    function update_data_keluarga($id_keluarga, $field) {                 
        $this->db->where('id_keluarga', $id_keluarga);
        $this->db->update('tb_keluarga', $field);                
        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

    function hapus_data_keluarga($id_keluarga) {
        $this->db->where('id_keluarga', $id_keluarga);
        $this->db->delete('tb_keluarga');
        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }    
    }
    //end of data keluarga


    //data pendidikan
    function get_data_pendidikan($id_user) {   
        $this->db->select('pd.id_user,pd.id_pendidikan,pd.nama_sekolah,pd.kota,pd.tahun_lulus,pd.jurusan,pd.nilai_ratarata,p.id_pendidikan');
        $this->db->from('tb_pendidikan pd');
        $this->db->join('p_pendidikan p', 'p.id_pendidikan = pd.id_pendidikan');
        $this->db->where('id_user', $id_user);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            $hasil = $query->result();
            return $hasil;
        } else {
            return false;
        }        
    }

    //end of data pendidikan



}//M_pelamar

