<?php

    class bsw_mhsaccount extends DataMapper {
	
	var $has_one = array('bsw_mhsprofile');
	var $validation = array(
		array(
		   'field' => 'nim_tpb',
		   'label' => 'nim tpb',
		   'rules' => array('required', 'trim', 'max_length' => 10),
		),
		array(
		   'field' => 'nim_jurusan',
		   'label' => 'nim jurusan',
		   'rules' => array('trim', 'max_length' => 10),
		),
	    array(
	       'field' => 'email_itb',
	       'label' => 'Email ITB',
	       'rules' => array('required', 'trim', 'valid_email', 'max_length' => 45),
	    ),
	    array(
	       'field' => 'password',
	       'label' => 'Password',
	       'rules' => array('required', 'trim', 'unique', 'min_length' => 5, 'max_length' => 255, 'encrypt'),
	    ),
	    array(
	       'field' => 'confirm_password',
	       'label' => 'Confirm Password',
	       'rules' => array('encrypt', 'matches' => 'password'),
	    ),
	);
	
	function bsw_mhsaccount() {
	    parent::DataMapper();
	}
	
	function _encrypt($field) {
	    if (!empty($this->{$field})) {
			$this->{$field} = md5($this->{$field});
	    }
	}
    }

?>