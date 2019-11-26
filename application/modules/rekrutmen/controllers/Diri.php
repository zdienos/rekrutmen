<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Diri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
	    $this->load->model('Model_hrd');	    
	}

	public function index()
	{ 	
		$data['d_agama'] = $this->Model_hrd->data_p_agama();

		$this->load->view('template/header');
		$this->load->view('template/leftside');
		$this->load->view('diri/index', $data);
		$this->load->view('template/footer_js');
		$this->load->view('diri/js');
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
