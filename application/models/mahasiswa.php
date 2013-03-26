<?php
    
    
    class Mahasiswa extends CI_Model {
	// datamapperkan semua
	
	function __construct() {
	    parent::__construct();
	}
	
	function validasi() { 
	    $this->db->where('nim_tpb', $this->input->post('nim_tpb'));
	    $this->db->where('password', md5($this->input->post('pass')));
	    $ambil = $this->db->get('bsw_mhsaccounts');
		//echo var_dump($ambil->num_rows);
	    if ($ambil->num_rows == 1)
			return true;
		else
			return false;
	}
	    
	function atur_session ($usr) {
	  $x = array(
	      'nim_tpb'=>$usr,
	      'logged_in'=>TRUE
	      );
	  $this->session->set_userdata($x);
	}
	
	function isLoggedIn () {
	  $sesi = $this->session->all_userdata();
	  if (array_key_exists('logged_in', $sesi))
	    return $sesi['logged_in'];
	  else
	    return false;
	}
	
	function logout () {
	  $array_items = array('username' => '', 'logged_in' => '');
	  $this->session->unset_userdata($array_items);
	}	
	
	function getprofil($usr) {
	    $ma = new bsw_mhsaccount();
	    $mp = new bsw_mhsprofile();
	    
	    $query = "
			SELECT *
			FROM bsw_mhsaccounts AS a, bsw_mhsprofiles AS b
			WHERE a.nim_tpb = '".$usr."'
		";
	    $ambil = $this->db->query($query);
	    $temp = $ambil->result();
	    return $temp[0];
	}
	
	function daftar1() { // perbaiki validasi
	    $ma = new bsw_mhsaccount();
			$ma->nim_tpb = $this->input->post('reg_nim_tpb');
			$ma->nim_jurusan = $this->input->post('reg_nim_jur');
			$ma->email_itb = $this->input->post('reg_email_itb');
			$ma->password = $this->input->post('reg_password');
			$ma->confirm_password = $this->input->post('reg_confirm_password');
	    $b = ($ma->save());
	//    if ($b){
	//		return 'You have successfully registered';
	//    } else {
	//		return $ma->error->string ;
	//    }
		return $b;
	}
	
	function daftar2() {
		return true;
	}
	
	function daftar3() {
		return true;
	}
	
	function daftar4() {
		return true;
	}
	
	function daftar5() {
		return true;
	}
	
	
    }  
    
?>