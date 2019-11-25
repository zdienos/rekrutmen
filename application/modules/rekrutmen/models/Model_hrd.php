<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_hrd extends CI_Model {

	function getIdKaryawan($nik)
	{
		$q=$this->db->query("SELECT id_karyawan FROM karyawan WHERE nik='$nik' AND status_aktif='Aktif'");
		if($q->num_rows()>0){
					 foreach($q->result() as $dt){
							 $hasil = $dt->id_karyawan;
					 }
			 }else{
					 $hasil = '';
			 }
	 return $hasil;
	}

	public function data_perusahaan(){
		$q = $this->db->order_by('singkat');
		$q = $this->db->get('perusahaan');
		return $q;
	}

	public function data_perusahaan_singkat(){
		$q=$this->db->get('perusahaan');
		 if($q->num_rows()>0){
            foreach($q->result() as $dt){
                $hasil = $dt->singkat.' - '.$dt->lokasi;
            }
        }else{
            $hasil = '';
        }
		return $hasil;
	}

    public function getlokasiperusahaan($id){
		$q=$this->db->select('lokasi')->where('id_perusahaan',$id)->get('perusahaan')->row()->lokasi;
		return $q;
	}

	public function data_cuti_brsm(){
		$q = $this->db->order_by('tgl_cuti_brsm');
		$q = $this->db->get('p_cuti_brsm');
		return $q;
	}

	public function data_jabatan(){
		$q = $this->db->order_by('nama_jabatan');
		$q = $this->db->get('jabatan');
		return $q;
	}

	public function data_brand(){
		$q = $this->db->order_by('nama_brand');
		$q = $this->db->get('brand');
		return $q;
	}

	public function data_divisi(){
		$q = $this->db->order_by('divisi');
		$q = $this->db->get('p_divisi');
		return $q;
	}

	public function riwayat_cuti($id){

		$q= $this->db->query("SELECT tgl_mulai_kerja FROM karyawan WHERE nik='$id'");
		foreach($q->result() as $dt){
			$tgl_mulai_kerja = $dt->tgl_mulai_kerja;
			$exp = explode('-',$tgl_mulai_kerja);
			if(count($exp) == 3) {
				$tgl = $exp[0]=Date('Y').'-'.$exp[1].'-'.$exp[2];
				$tgl2 = $exp[0]=(Date('Y')-1).'-'.$exp[1].'-'.$exp[2];
				$tgl3 = $exp[0]=(Date('Y')+1).'-'.$exp[1].'-'.$exp[2];
			}
		}

		$now= Date('Y-m-d');

		if ($now > $tgl){
			$q2= $this->db->query("SELECT * FROM cuti WHERE nik='$id' AND ((tgl_mulai_cuti BETWEEN '$tgl' AND '$now') OR (tgl_mulai_cuti BETWEEN '$now' AND '$tgl3')) ");
		}
		elseif($now < $tgl){
			$q2= $this->db->query("SELECT * FROM cuti WHERE nik='$id' AND ((tgl_mulai_cuti BETWEEN '$tgl2' AND '$now') OR (tgl_mulai_cuti BETWEEN '$now' AND '$tgl')) ");
		}
		return $q2;
	}

	public function data_cuti(){
		$q = $this->db->order_by('tgl_mulai_cuti');
		$q = $this->db->get('cuti');
		return $q;
	}

	public function data_p_agama(){
		$q = $this->db->order_by('id_agama');
		$q = $this->db->get('p_agama');
		return $q;
	}

	public function data_p_pendidikan(){
		$q = $this->db->order_by('id_pendidikan');
		$q = $this->db->get('p_pendidikan');
		return $q;
	}

	public function data_p_level(){
		$q = $this->db->order_by('level');
		$q = $this->db->get('p_level');
		return $q;
	}

	public function data_p_url(){
		$q = $this->db->order_by('url');
		$q = $this->db->get('p_url');
		return $q;
	}

	public function lama_cuti($id){
		$this->db->where('cuti',$id);
		$q=$this->db->get('cuti');
		 if($q->num_rows()>0){
            foreach($q->result() as $dt){
                $hasil = $dt->lama_cuti;
            }
        }else{
            $hasil = '';
        }
		return $hasil;
	}

	public function nama_perusahaan_singkat($id){
		$this->db->where('id_perusahaan',$id);
		$q=$this->db->get('perusahaan');
		 if($q->num_rows()>0){
            foreach($q->result() as $dt){
                $hasil = $dt->singkat.' - '.$dt->lokasi;
            }
        }else{
            $hasil = '';
        }
		return $hasil;
	}

	public function nama_perusahaan_singkat2($id){
		$this->db->where('id_perusahaan',$id);
		$q=$this->db->get('perusahaan');
		 if($q->num_rows()>0){
            foreach($q->result() as $dt){
                $hasil = $dt->singkat.'/'.$dt->lokasi;
            }
        }else{
            $hasil = '';
        }
		return $hasil;
	}

	public function cuti_bersama(){

		$q = $this->db->query("SELECT COUNT(id_cuti_brsm) as id FROM p_cuti_brsm");
		foreach($q->result() as $dt){
			$hasil = (int)$dt->id;
		}
		return $hasil;
	}

	public function jumlah_cuti($id){
		$tgl1 = Date('Y').'-'.'01'.'-'.'01';
		$tgl2 = (Date('Y')+1).'-'.'12'.'-'.'31';
		$q2= $this->db->query("SELECT SUM(c.lama_cuti) as lama  FROM cuti c JOIN karyawan k ON c.nik=k.nik WHERE c.nik='$id' AND c.tgl_mulai_cuti BETWEEN '$tgl1' AND '$tgl2' ");
			foreach($q2->result() as $dt){
				$hasil = $dt->lama;
			}
		return $hasil;
	}


	public function BrandToKaryawan($id){
		$this->db->where('id_brand',$id);
		$q=$this->db->get('brand');
		 if($q->num_rows()>0){
            foreach($q->result() as $dt){
                $hasil = $dt->nama_brand;
            }
        }else{
            $hasil = '';
        }
		return $hasil;
	}

	public function JabatanToKaryawan($id){
		$this->db->where('id_jabatan',$id);
		$q=$this->db->get('jabatan');
		 if($q->num_rows()>0){
            foreach($q->result() as $dt){
                $hasil = $dt->nama_jabatan;
            }
        }else{
            $hasil = '';
        }
		return $hasil;
	}

	public function DivisiToKaryawan($id){
		$this->db->where('id_divisi',$id);
		$q=$this->db->get('p_divisi');
		 if($q->num_rows()>0){
            foreach($q->result() as $dt){
                $hasil = $dt->divisi;
            }
        }else{
            $hasil = '';
        }
		return $hasil;
	}

	public function AgamaToKaryawan($id){
		$this->db->where('id_agama',$id);
		$q=$this->db->get('p_agama');
		 if($q->num_rows()>0){
            foreach($q->result() as $dt){
                $hasil = $dt->nama_agama;
            }
        }else{
            $hasil = '';
        }
		return $hasil;
	}

	public function PendidikanToKaryawan($id){
		$this->db->where('id_pendidikan',$id);
		$q=$this->db->get('p_pendidikan');
		 if($q->num_rows()>0){
            foreach($q->result() as $dt){
                $hasil = $dt->nama_pendidikan;
            }
        }else{
            $hasil = '';
        }
		return $hasil;
	}

	public function LevelToAdmin($id){
		$this->db->where('id_level',$id);
		$q=$this->db->get('p_level');
		 if($q->num_rows()>0){
            foreach($q->result() as $dt){
                $hasil = $dt->level;
            }
        }else{
            $hasil = '';
        }
		return $hasil;
	}

	public function UrlToAdmin($id){
		$this->db->where('id_url',$id);
		$q=$this->db->get('p_url');
		 if($q->num_rows()>0){
            foreach($q->result() as $dt){
                $hasil = $dt->url;
            }
        }else{
            $hasil = '';
        }
		return $hasil;
	}

	public function nama_perusahaan($id){
		$q = $this->db->query("SELECT * FROM perusahaan WHERE id_perusahaan='$id'");
        if($q->num_rows()>0){
            foreach($q->result() as $dt){
                $hasil = $dt->nama_perusahaan;
            }
        }else{
            $hasil = '';
        }
		return $hasil;
	}

	function getIdBrandByPerusahaan($id)
	{
		$this->db->select('id_brand');
		$this->db->where('id_perusahaan', $id);
		$q = $this->db->get('perusahaan');
		//if id is unique we want just one row to be returned
		$data = array_shift($q->result_array());
		$result = $data['id_brand'];
		return  $result;
	}

	public function data_karyawan($per){
		$id['id_perusahaan'] = $per;
		$q = $this->db->order_by('nik');
		$q = $this->db->get_where('karyawan',$id);
		return $q;
	}

	public function data_all_karyawan(){
		$this->db->where('status','Aktif');
		$this->db->order_by('nik');
		$q = $this->db->get('karyawan');
		return $q;
	}



	/*** cari_data **/
	public function cari_id_username($u){
		$q = $this->db->query("SELECT id_user FROM admins WHERE username='$u'");
		foreach($q->result() as $dt){
			$hasil = $dt->id_user;
		}
		return $hasil;
	}

	public function cari_foto_username($u){
		$q = $this->db->query("SELECT * FROM admins WHERE username='$u'");
		foreach($q->result() as $dt){
			$hasil = $dt->foto;
		}
		return $hasil;
	}

	public function cari_foto_karyawan($id){
		$q = $this->db->query("SELECT * FROM karyawan WHERE id_karyawan='$id'");
		foreach($q->result() as $dt){
			$hasil = $dt->file_foto;
		}
		return $hasil;
	}

	/*** get_data **/
	public function get_nama_karyawan($id){
		$q = $this->db->query("SELECT nama_karyawan FROM karyawan WHERE id_karyawan='$id'");
		if($q->num_rows()>0){
				foreach($q->result() as $dt){
						$hasil = $dt->nama_karyawan;
				}
		}else{
				$hasil = '';
		}
		return $hasil;
	}

	/*** jumlah data ***/
	public function jml_data($table){
		$q = $this->db->get($table);
		return $q->num_rows();
	}

	public function jml_all_karyawan(){
		$this->db->where('status_aktif','Aktif');
		$q = $this->db->get('karyawan');
		return $q->num_rows();
	}

	/*** data table ***/
	public function data($table){
		$q = $this->db->get($table);
		return $q->result();
	}

	public function create_category_karyawan($id_perusahaan){

		$where = "WHERE tgl_mulai_kerja<=now()";
		if(!empty($id_perusahaan)){
			$where .=" AND id_perusahaan='$id_perusahaan'";
		}
		$q = $this->db->query("SELECT YEAR(tgl_mulai_kerja) as tahun FROM karyawan  $where GROUP BY YEAR(tgl_mulai_kerja) order by tgl_mulai_kerja DESC LIMIT 10");

		foreach($q->result() as $dt){
			$hasil[] = $dt->tahun;
		}
		return $hasil;
	}
    
    public function create_category_karyawan_bulan($id_perusahaan){

		$where = "WHERE YEAR(tgl_mulai_kerja)=YEAR(CURDATE())";
		if(!empty($id_perusahaan)){
			$where .=" AND id_perusahaan='$id_perusahaan'";
		}
		$q = $this->db->query("SELECT MONTH(tgl_mulai_kerja) as bulan FROM karyawan  $where GROUP BY MONTH(tgl_mulai_kerja) order by tgl_mulai_kerja DESC LIMIT 12");

		foreach($q->result() as $dt){
			$hasil[] = $dt->bulan;
		}
		return $hasil;
	}
    
    public function data_chart_karyawan($id_perusahaan){

		$where = "WHERE tgl_mulai_kerja<=now()";
		if(!empty($id_perusahaan)){
			$where .=" AND id_perusahaan='$id_perusahaan'";
		}

		$q = $this->db->query("SELECT COUNT(YEAR(tgl_mulai_kerja)) as jml_karyawan FROM karyawan $where GROUP BY YEAR(tgl_mulai_kerja) order by tgl_mulai_kerja DESC LIMIT 10");

		foreach($q->result() as $dt){
			$hasil[] = (int)$dt->jml_karyawan;
		}
		return $hasil;
	}

	public function data_chart_karyawan_bulan($id_perusahaan){

		$where = "WHERE YEAR(tgl_mulai_kerja)=YEAR(CURDATE())";
		if(!empty($id_perusahaan)){
			$where .=" AND id_perusahaan='$id_perusahaan'";
		}

		$q = $this->db->query("SELECT COUNT(MONTH(tgl_mulai_kerja)) as jml_karyawan FROM karyawan $where GROUP BY MONTH(tgl_mulai_kerja) order by tgl_mulai_kerja DESC LIMIT 12");

		foreach($q->result() as $dt){
			$hasil[] = (int)$dt->jml_karyawan;
		}
		return $hasil;
	}

	public function create_category_cuti(){

		$q = $this->db->query("SELECT YEAR(tgl_mulai_cuti) as tahun FROM cuti WHERE tgl_mulai_cuti<=now() GROUP BY YEAR(tgl_mulai_cuti) order by tgl_mulai_cuti");

		foreach($q->result() as $dt){
			$hasil[] = $dt->tahun;
		}
		return $hasil;
	}

	public function data_chart_cuti($id_perusahaan){

		$where = "WHERE tgl_mulai_cuti<=now()";
		if(!empty($id_perusahaan)){
			$where .=" AND id_perusahaan='$id_perusahaan'";
		}

		$q = $this->db->query("SELECT COUNT(YEAR(tgl_mulai_cuti)) as jml_karyawan FROM cuti c JOIN karyawan k ON c.nik=k.nik $where GROUP BY YEAR(tgl_mulai_cuti) order by tgl_mulai_cuti");

		foreach($q->result() as $dt){
			$hasil[] = (int)$dt->jml_karyawan;
		}
		return $hasil;
	}

	public function create_category_resign(){

		$q = $this->db->query("SELECT YEAR(tgl) as tahun FROM resign WHERE tgl<=now() GROUP BY YEAR(tgl) order by tgl");

		foreach($q->result() as $dt){
			$hasil[] = $dt->tahun;
		}
		return $hasil;
	}

	public function data_chart_resign($id_perusahaan){

		$where = "WHERE tgl<=now()";
		if(!empty($id_perusahaan)){
			$where .=" AND id_perusahaan='$id_perusahaan'";
		}

		$q = $this->db->query("SELECT COUNT(YEAR(tgl)) as jml_karyawan FROM resign r JOIN karyawan k ON r.nik=k.nik $where GROUP BY YEAR(tgl) order by tgl");

		foreach($q->result() as $dt){
			$hasil[] = (int)$dt->jml_karyawan;
		}
		return $hasil;
	}

	public function data_chart_status($param){
        $tgl="";
        if($param=='Resign'){
            $tgl=" AND YEAR(tgl_resign)=YEAR(CURDATE())";
        }

	 	$q = $this->db->query("SELECT COUNT(id_karyawan) as jml_karyawan FROM karyawan WHERE status_aktif='$param' $tgl");

		foreach($q->result() as $dt){
			$hasil = (int)$dt->jml_karyawan;
		}
		return $hasil;
	}


	public function n_training(){

		$q = $this->db->query("SELECT COUNT(id) as id FROM n_training");
		foreach($q->result() as $dt){
			$hasil = (int)$dt->id;
		}
		return $hasil;
	}

	public function n_kontrak1(){

		$q = $this->db->query("SELECT COUNT(id) as id FROM n_kontrak1");
		foreach($q->result() as $dt){
			$hasil = (int)$dt->id;
		}
		return $hasil;
	}

	public function n_kontrak2(){

		$q = $this->db->query("SELECT COUNT(id) as id FROM n_kontrak2");
		foreach($q->result() as $dt){
			$hasil = (int)$dt->id;
		}
		return $hasil;
	}

	public function n_ulang_thn(){

		$q = $this->db->query("SELECT COUNT(id) as id FROM n_ulang_thn");
		foreach($q->result() as $dt){
			$hasil = (int)$dt->id;
		}
		return $hasil;
	}



}

/* End of file app_model.php */
/* Location: ./application/models/app_model.php */
