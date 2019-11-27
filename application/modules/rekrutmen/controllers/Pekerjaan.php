<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pekerjaan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_hrd');
		$this->_cek_login();   
	}

	function _cek_login() {
		if (!isset($this->session->userdata['email'])) {
	  	redirect(base_url('otentikasi'));
	  	}
	}

	public function index()
	{
		$data['d_pendidikan'] = $this->Model_hrd->data_p_pendidikan();

		$this->load->view('template/header');
		$this->load->view('template/leftside');
		$this->load->view('pekerjaan/index', $data);
		$this->load->view('template/footer_js');
		$this->load->view('pekerjaan/js');
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


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
