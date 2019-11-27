<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Otentikasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_otentikasi','otentikasi');		
	}

	function index(){ 		
		// $pwd = 'asdasd'	;
		// $hashed_pwd = '$2y$10$x6XUVzwGDG./DNf4yDt6MOTykunlJg3S3wo0Q151OsqNY5sFV.kJ6';
		// if (password_verify($pwd, $hashed_pwd)) {
		// 	echo 'berhasil';
		// } else {echo 'gagal';
		// }
		//$this->session->sess_destroy();
		if ($this->session->userdata('email')) {
            redirect('rekrutmen/diri');
        } else {
			$this->session->sess_destroy();
			$this->load->view('otentikasi/login');
			$this->load->view('template/footer_js');
			$this->load->view('template/footer');
		}
		
	}

	function login() {
		
		$this->form_validation->set_rules('txt_email', 'username', 'required|trim|xss_clean|valid_email');
		$this->form_validation->set_rules('txt_password', 'password', 'required|trim');		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('otentikasi/login');
		} 	
		else {	
			$email = $this->input->post('txt_email');
        	$password = $this->input->post('txt_password');
			  
			$hasil = $this->otentikasi->cek_login($email, $password);
			if ($hasil) {
				//die('berhasil')				
				$this->session->set_flashdata('psn_sukses', 'Login Berhasil !');
				redirect(base_url('diri'));
			} 
			else {
				//die('not sukses');
				$this->session->set_flashdata('psn_error', 'Username atau Password yang anda masukkan salah.');
				redirect(base_url('otentikasi'));
			}
		}
	}

	function daftar() {	
		if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('txt_namalengkap', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'WPU User Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0,
                'date_created' => time()
            ];

            // siapkan token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->db->insert('user_token', $user_token);

            $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please activate your account</div>');
            redirect('auth');
		}
	}
		

	function logout(){
		$this->session->sess_destroy();		
		redirect(base_url('otentikasi'));
	}
	


		// $this->form_validation->set_rules('txt_email', 'username', 'required|trim|xss_clean|valid_email');
		// $this->form_validation->set_rules('txt_password', 'password', 'required|trim');		
		// if ($this->form_validation->run() == FALSE) {
		// 	$this->load->view('otentikasi/daftar');
		// 	$this->load->view('template/footer_js');
		// 	$this->load->view('template/footer');
		// } 	
		// else {	
		// 	$email = $this->input->post('txt_email');
        // 	$password = $this->input->post('txt_password');
			  
		// 	$hasil = $this->otentikasi->cek_login($email, $password);
		// 	if ($hasil) {
		// 		//die('sukses');
		// 		$this->session->set_flashdata('psn_sukses', 'Login Berhasil !');
		// 		redirect(base_url('diri'));
		// 	} 
		// 	else {
		// 		//die('not sukses');
		// 		$this->session->set_flashdata('psn_error', 'Username atau Password yang anda masukkan salah.');
		// 		redirect(base_url('otentikasi'));
		// 	}
		// }
	


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
