<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Diri extends CI_Controller {

	public function __construct() {
		parent::__construct();		
		$this->load->model('M_pelamar','pelamar');	
		$this->load->model('Model_hrd','hrd');
		$this->_cek_login();   
	}

	function _cek_login() {
		if (!isset($this->session->userdata['email'])) {
	  	redirect(base_url('otentikasi'));
	  	}
	}

	function tgl_sql($date){
		$exp = explode('-',$date);
		if(count($exp) == 3) {
			$date = $exp[2].'-'.$exp[1].'-'.$exp[0];
		}
		return $date;
	}


	function index() { 	
		// $cek 	= $this->session->userdata('logged_in');
		// $level 	= $this->session->userdata('level');
		// if(!empty($cek) && $level=='admin_hrd'){
		// 	$d['judul']		= "Perusahaan";
		// 	$d['class'] 	= "master";
		// 	$d['content'] 	= 'perusahaan/view';
		// 	$d['data']  	= $this->model_perusahaan->all();
		// 	$this->load->view('home',$d);
		// }else{
		// 	redirect('hrd','refresh');
		// }
		$id_user = $this->session->userdata['id_user'];
		$data['id_user']   = $id_user;
		$data['d_pelamar'] = $this->pelamar->get_data_diri($id_user);
		$data['d_agama']   = $this->hrd->data_p_agama();

		$this->load->view('template/header');
		$this->load->view('template/leftside');
		$this->load->view('diri/index', $data);
		$this->load->view('template/footer_js');
		$this->load->view('diri/js');
		$this->load->view('template/footer');
	}

	
	function simpan_data_diri() { 		
		$id_user 	 = $this->input->post('txt_iduser');	

		$field = array(
			'nama_lengkap'	=> $this->input->post('txt_namalengkap'),
			'tempat_lahir'	=> $this->input->post('txt_tempatlahir'),
			'tgl_lahir'  	=> $this->tgl_sql($this->input->post('txt_tgllahir')),
			'jenis_kelamin'	=> $this->input->post('opt_jeniskelamin'),
			'alamat'      	=> $this->input->post('txt_alamatlengkap'),
			'no_handphone'	=> $this->input->post('txt_nohandphone'),
			'no_ktp'		=> $this->input->post('txt_noktp'),
			'id_agama'		=> $this->input->post('opt_agama'),
			'id_pendidikan'	=> $this->input->post('opt_pendidikan')	,
			'status'		=> $this->input->post('opt_status')
			//'jumlah_anak'	=> $this->input->post('txt_jumlahanak'),
			//'email'			=> $this->input->post('txt_email'),
			//'password'		=> $this->input->post('txt_password'),
			//'file_foto'    	=> $this->input->post('txt_catatan')
		);		
		$hasil = $this->pelamar->simpan_data_diri($id_user, $field);
		if($hasil){
			$this->session->set_flashdata('psn_sukses','Data telah tersimpan');
			echo json_encode(array("status" => true));
		} else {
			//echo $id_user;
		 	//$this->session->set_flashdata('psn_error','Gagal menambah data ');
		}
	}

	


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
