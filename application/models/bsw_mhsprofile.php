<?php

    class bsw_mhsprofile extends DataMapper {
		
		var $has_one = array('bsw_mhsaccount');
		var $validation = array(
			array(
			   'field' => 'email_itb',
			   'label' => 'Email ITB',
			   'rules' => array('required', 'trim', 'valid_email')
			)
		);
		
		function bsw_mhsprofile() {
			parent::DataMapper();
		}
    
    }

?>