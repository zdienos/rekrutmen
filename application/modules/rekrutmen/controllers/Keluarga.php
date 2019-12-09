<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Keluarga extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_hrd','hrd');
		$this->load->model('M_pelamar','pelamar');	
		$this->_cek_login();   
	}

	function _cek_login() {
		if (!isset($this->session->userdata['email'])) {
	  	redirect(base_url('otentikasi'));
	  	}
	}

	public function index()
	{
		$id_user = $this->session->userdata['id_user'];
		$data['id_user']   = $id_user;
		$data['d_pelamar'] = $this->pelamar->get_data_keluarga($id_user);
		$data['d_pendidikan'] = $this->hrd->data_p_pendidikan();
		
		$this->load->view('template/header');
		$this->load->view('template/leftside');
		$this->load->view('keluarga/index', $data);
		$this->load->view('template/footer_js');
		$this->load->view('keluarga/js');
		$this->load->view('template/footer');
		// die('cek');
		// error_reporting(0);
		// $cek = $this->session->userdata('logged_in');
		// $level = $this->session->userdata('level');
		// if(!empty($cek) && $level=='administrator'){
		// 	$d['judul']="Dashboard";
		// 	$d['class'] = "home";

		// 	$d['content']= 'adm_isi';

		// 	$this->load->view('adm_home',$d);
		// }else{
		// 	redirect('login','refresh');
		// }
	}

	public function simpan_data_keluarga(){				
		$field = array(
            'id_user'       => $this->input->post('txt_iduser'),
            'hubungan'      => $this->input->post('txt_hubungan'),
			'nama'          => $this->input->post('txt_nama'),
			'jenis_kelamin'	=> $this->input->post('opt_jeniskelamin'),
            'usia'          => $this->input->post('txt_usia'),
            'id_pendidikan' => $this->input->post('opt_pendidikan')        
		);
		
		$hasil = $this->pelamar->simpan_data_keluarga($field);
		if($hasil){
			$this->session->set_flashdata('psn_sukses','Data telah tersimpan');
			echo json_encode(array("status" => true));
		} else {			
		 	//$this->session->set_flashdata('psn_error','Gagal menambah data ');
		}
	}

	public function update_data_keluarga(){	
		$id_keluarga = $this->input->post('txt_idkeluarga');		
		$field = array(            		
            'hubungan'     	=> $this->input->post('txt_hubungan'),
			'nama'          => $this->input->post('txt_nama'),
			'jenis_kelamin' => $this->input->post('opt_jeniskelamin'),
            'usia'          => $this->input->post('txt_usia'),
            'id_pendidikan'	=> $this->input->post('opt_pendidikan')        
		);
		
		$hasil = $this->pelamar->update_data_keluarga($id_keluarga,$field);
		if($hasil){
			$this->session->set_flashdata('psn_sukses','Data telah diupdate');
			echo json_encode(array("status" => true));
		} else {
			echo $hasil;
		}
	}

	public function hapus_data_keluarga(){
        $id_keluarga=$this->input->post('id_keluarga');
		$hasil = $this->pelamar->hapus_data_keluarga($id_keluarga);
		// if($hasil){
		// 	$this->session->set_flashdata('psn_sukses','Data telah dihapus');
		// 	echo json_encode(array("status" => true));
		// }
        //echo json_encode($data);
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
