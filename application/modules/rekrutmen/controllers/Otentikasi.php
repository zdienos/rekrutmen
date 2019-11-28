<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Otentikasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_otentikasi','otentikasi');	
	}

	function email() {
		$data['nama'] = 'Dindaaaa';
		$data['url'] = 'https:/www.detik.com';
		$this->load->view('otentikasi/email', $data);
	}

	function index(){ 		
		// $pwd = 'asdasd'	;
		// $hashed_pwd = '$2y$10$x6XUVzwGDG./DNf4yDt6MOTykunlJg3S3wo0Q151OsqNY5sFV.kJ6';
		// if (password_verify($pwd, $hashed_pwd)) {
		// 	echo 'berhasil';
		// } else {echo 'gagal';
		// }
		//$this->session->sess_destroy();
		
		if (isset($this->session->userdata['email'])) {
            redirect(base_url('rekrutmen/diri'));
        } else {			
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
			$this->load->view('template/footer_js');
		 	$this->load->view('template/footer');
		} 	
		else {	
			$email = $this->input->post('txt_email');
        	$password = $this->input->post('txt_password');
			  
			$hasil = $this->otentikasi->cek_login($email);			
			
			if ($hasil) {//email terdaftar			 		
				if (password_verify($password, $hasil['password'])) {//password bener
					if($hasil['active']==1) {//user aktif
						//$session_data['nama_lengkap'] = $hasil['nama_lengkap'];;
						$session_data['email'] = $hasil['email'];
						$session_data['role'] = $hasil['role'];;
						$session_data['avatar'] = $hasil['avatar'];;
						//$session_data['active'] = $$hasil['active'];;										
						$this->session->set_userdata($session_data);
						redirect(base_url('diri'));
					} else {//user belum aktif
						$this->session->set_flashdata('psn_error', 'Email ini belum aktif, silahkan cek inbox email Anda !');
						redirect(base_url('otentikasi'));
					}					
				} else {//password salah
					$this->session->set_flashdata('psn_error', 'Password yang Anda masukkan salah!');
					redirect(base_url('login'));
				}							
			} 
			else {//email blm terdaftar				
				$this->session->set_flashdata('psn_error', 'Email ini belum terdaftar, silahkan registrasi terlebih dahulu');
				redirect(base_url('daftar'));
			}
		}
	}

	function daftar() {	
		if (isset($this->session->userdata['email'])) {
            redirect(base_url('rekrutmen/diri'));
        }

        $this->form_validation->set_rules('txt_namalengkap', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('txt_email', 'Email', 'required|trim|valid_email');
		//$this->form_validation->set_rules('txt_email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', [
        //    'is_unique' => 'This email has already registered!'
        //]);
		$this->form_validation->set_rules('txt_password', 'Password', 'required|trim|min_length[6]');
		$this->form_validation->set_rules('txt_password1', 'Password', 'required|trim|min_length[6]');
        
        if ($this->form_validation->run() == false) {	
			//$this->session->set_flashdata('psn_error', form_error('email')); 
            $this->load->view('otentikasi/daftar');
            $this->load->view('template/footer_js');
            $this->load->view('template/footer');
        } else {					
			$email = $this->input->post('txt_email', true);
			$token = base64_encode(random_bytes(32));
            $data = [
                'nama_lengkap'	=> htmlspecialchars($this->input->post('txt_namalengkap', true)),
                'email' 		=> htmlspecialchars($email),
				'password' 		=> password_hash($this->input->post('txt_password'), PASSWORD_DEFAULT),
				'token'			=> $token,
                'avatar' 		=> 'default.jpg',
                'role' 			=> 2,
                'active' 		=> 0
			]; 

			$cek_email = $this->otentikasi->cek_email($email);
			if ($cek_email) {
				$this->session->set_flashdata('psn_error', 'Email tersebut sudah terdaftar, silahkan ganti email yang lain');
				redirect('daftar');
			}

			$hasil = $this->otentikasi->tambah_user($data);
            if ($hasil) {
				$nama_lengkap = $data['nama_lengkap'];
				$this->kirim_email($email, $nama_lengkap, $token);
				$this->session->set_flashdata('psn_sukses', 'Pendaftaran berhasil, silahkan cek email Anda');
				redirect('login');
			} else {
				$this->session->set_flashdata('psn_error', 'Pendaftaran gagal!');
				redirect('daftar');
			}
		}
	}
		
	private function kirim_email($email, $nama_lengkap, $token) {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'rekrutmenkumala@gmail.com',
            'smtp_pass' => 'Kumala123456',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
		];
		
		//$url = '.base_url('otentikasi/aktivasi?email='.$email.'&token='.urlencode($token).');
		$url =   base_url('otentikasi/aktivasi?email=' . $email . '&token=' . urlencode($token));
		$demail['nama'] = $nama_lengkap;
		$demail['url']  = $url;
		$message = $this->load->view('otentikasi/email', $demail, true);
		
		

        $this->email->initialize($config);

        $this->email->from('rekrutmenkumala@gmail.com', 'Kumala Group Rekrutmen');
        $this->email->to($email);
        $this->email->subject('Aktivasi akun pendaftaran');
		$this->email->message('Klik link berikut untuk aktivasi pendaftaran : <a href="'.$url.'">Activate</a>'); 
		$this->email->message($message); 

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
	}

	public function aktivasi() {
        $email = $this->input->get('email');
		$token = $this->input->get('token');
		
		$hasil = $this->otentikasi->aktivasi_user($email, $token);

		if ($hasil) {
			//$this->kirim_email($email, $token);
			$this->session->set_flashdata('psn_sukses', 'Aktivasi  berhasil, silahkan login');
			redirect('login');
		} else {
			$this->session->set_flashdata('psn_error', 'Aktivasi gagal!');
			redirect('daftar');
		}        
    }
	
	function logout(){		
		$this->session->sess_destroy();		
		redirect(base_url('login'));
	}
	

}

/* End of file Otentikasi.php */
/* Location: ./application/modules/otentikasi/Otentikasi.php */
