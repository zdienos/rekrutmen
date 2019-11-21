<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->model('model_login');
	}

	public function index()
	{

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('login');
		}else{			
			$u = $this->input->post('username');
			$p = $this->input->post('password');
			$this->model_login->getLoginData($u,$p,$fp);
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
