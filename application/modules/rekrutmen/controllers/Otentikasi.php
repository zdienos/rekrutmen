<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Otentikasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_otentikasi','otentikasi');		
	}

	public function index()
	{ 		
		// $pwd = 'asdasd'	;
		// $hashed_pwd = '$2y$10$x6XUVzwGDG./DNf4yDt6MOTykunlJg3S3wo0Q151OsqNY5sFV.kJ6';
		// if (password_verify($pwd, $hashed_pwd)) {
		// 	echo 'berhasil';
		// } else {echo 'gagal';
		// }
		$this->session->sess_destroy();
    	$this->load->view('otentikasi/login');
	}

	public function login() 
	{
		$this->form_validation->set_rules('txt_email', 'username', 'required|trim|xss_clean|valid_email');
		$this->form_validation->set_rules('txt_password', 'password', 'required|trim');		
		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('otentikasi/login');
		} 	
		else 
		{	
			$email = $this->input->post('txt_email');
        	$password = $this->input->post('txt_password');
        	//$user = $this->db->get_where('user', ['email' => $email])->row_array();		
			  
			$hasil = $this->otentikasi->cek_login($email, $password);
			if ($hasil) 
			{
				die('sukses');
				$this->session->set_flashdata('psn_sukses', 'Login Berhasil !');
				redirect(base_url('profil'));
			} 
			else 
			{
				die('not sukses');
				$this->session->set_flashdata('psn_error', 'Username atau Password yang anda masukkan salah.');
				redirect(base_url('otentikasi'));
			}
		}
	  }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
