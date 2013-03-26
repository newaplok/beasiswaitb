<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa_CTRL extends CI_Controller {


	public function index() {
		$this->load->view('welcome_message');
	}
	
	public function home() {
		$this->load->library('form_validation');
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	
	
	public function tes() {
		$this->load->library('form_validation');
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}
	
	public function login() {
		$this->load->model("mahasiswa");
		$query = $this->mahasiswa->validasi();
		
		if ($query) {
		    $this->mahasiswa->atur_session($this->input->post('nim_tpb'));
		    redirect("mahasiswa_ctrl/profil");
		} else {
		    redirect("mahasiswa_ctrl/home");
		}
	}
	
	public function registrasi($x) {
		$this->load->model("mahasiswa");
		$this->load->library('form_validation');
		$this->load->view('header');
		if($x==0){
				$this->load->view('register');
		} else
		if($x==1){
				// update db 1
				$this->load->view('getting_started');
		} else
		if($x==2){
				// update db 2
				$this->load->view('getting_started_2');
		} else
		if($x==3){
				// update db 3
				$this->load->view('getting_started_3');
		} else
		if($x==4){
				// update db 4
				$this->load->view('getting_started_4');
		} else {
		    redirect("mahasiswa_ctrl/home");
		}
		$this->load->view('footer');
	}
	
	public function profil() {
		$this->load->model("mahasiswa");
		
		if ($this->mahasiswa->isLoggedIn()) {
			$this->load->model("mahasiswa");
			$sesi = $this->session->all_userdata();
			//echo var_dump($sesi['nim_tpb']);
			$data['profil'] = $this->mahasiswa->getprofil($sesi['nim_tpb']);
			$this->load->view("mhsprofil_view",$data);
		}
		else
			redirect("mahasiswa_ctrl/home");		
	}
	
	public function logout() {
		$this->load->model("mahasiswa");
		$this->mahasiswa->logout();
		redirect("mahasiswa_ctrl/home");
	}
}

/* End of file mahasiswa_ctrl.php */
/* Location: ./application/controllers/mahasiswa_ctrl.php */