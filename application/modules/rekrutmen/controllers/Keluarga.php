<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Keluarga extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('leftside');
		$this->load->view('keluarga');
		$this->load->view('footer');
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
