<?php
if (! function_exists('checkSession')) {	
	function checkSession(){        
		$CI = & get_instance();			
		if(!$CI->session->userdata('name')){
			redirect('Logincontroller/loginform');
		}		
	}
}