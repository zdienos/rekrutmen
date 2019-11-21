<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_data extends CI_Model {
    
    public function getlokasiperusahaan($id){
		$q=$this->db->select('lokasi')->where('id_perusahaan',$id)->get('perusahaan')->row()->lokasi;
		return $q;
	}

    public function nama_perusahaan_singkat($id){
		$this->db->where('id_perusahaan',$id);
		$q=$this->db->get('perusahaan');
		 if($q->num_rows()>0){foreach($q->result() as $dt){$hasil = $dt->singkat.' - '.$dt->lokasi;}}else{$hasil = '';}
		return $hasil;
	}

	public function nama_perusahaan_singkat2($id){
		$this->db->where('id_perusahaan',$id);
		$q=$this->db->get('perusahaan');
		 if($q->num_rows()>0){foreach($q->result() as $dt){$hasil = $dt->singkat.'/'.$dt->lokasi;}}else{$hasil = '';}
		return $hasil;
	}


	public function BrandToKaryawan($id){
		$this->db->where('id_brand',$id);
		$q=$this->db->get('brand');
		 if($q->num_rows()>0){foreach($q->result() as $dt){$hasil = $dt->nama_brand;}}else{$hasil = '';}
		return $hasil;
	}

	public function JabatanToKaryawan($id){
		$this->db->where('id_jabatan',$id);
		$q=$this->db->get('jabatan');
		 if($q->num_rows()>0){foreach($q->result() as $dt){$hasil = $dt->nama_jabatan;}}else{$hasil = '';}
		return $hasil;
	}

	public function nama_perusahaan($id){
		$q = $this->db->query("SELECT * FROM perusahaan WHERE id_perusahaan='$id'");
        if($q->num_rows()>0){foreach($q->result() as $dt){$hasil = $dt->nama_perusahaan;}}else{$hasil = '';}
		return $hasil;
	}

	/*** cari_data **/
	public function cari_id_username($u){
		$q = $this->db->query("SELECT id_user FROM admins WHERE username='$u'");
		foreach($q->result() as $dt){$hasil = $dt->id_user;}
		return $hasil;
	}

	/*** get_data **/
	public function get_nama_karyawan($id){
		$q = $this->db->query("SELECT nama_karyawan FROM karyawan WHERE id_karyawan='$id'");
		if($q->num_rows()>0){foreach($q->result() as $dt){$hasil = $dt->nama_karyawan;}}else{$hasil = '';}
		return $hasil;
	}

	/*** jumlah data ***/
	public function jml_data($table){
		$q = $this->db->get($table);
		return $q->num_rows();
	}
    
    



}

/* End of file app_model.php */
/* Location: ./application/models/app_model.php */
