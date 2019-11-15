<?php
class Loginmodel extends CI_Model{
	
	function can_login($name, $password){
		
		$this->db->where('name',$name);
		$this->db->where('password',$password);
		$result =$this->db->get('users');
				
		if($result->num_rows()>0){	
			return true;
		}else{
			return false;
		}
	}
}