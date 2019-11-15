<?php
class Usermodel extends CI_Model{
	
	function userlist(){	
		$hasil=$this->db->get('users')->result_array();
		return $hasil;
	}
	function saveuser(){
		$data = array(				
				'name' 	  	  => $this->input->post('name'), 
				'age' 	  	  => $this->input->post('age'), 
				'email'   	  => $this->input->post('email'), 
				'address' 	  => $this->input->post('address'), 
				'cell' 	  	  => $this->input->post('cell'), 
				'cnic' 	  	  => $this->input->post('cnic'),
				'password' 	  => $this->input->post('password'),				
			);
		$result=$this->db->insert('users',$data);
		return $result;
	}
	function isPresent($id=null){
		$this->db->where('id', $id);
		$result = $this->db->get('users')->result_array();
		if(count($result) > 0){
			return $result[0];
		}else{
			return $result;
		}
	}
	function updateuser(){
		$id			=	$this->input->post('id');
		$name		=	$this->input->post('name');
		$age		=	$this->input->post('age');
		$email		=	$this->input->post('email');
		$address	=	$this->input->post('address');
		$cell		=	$this->input->post('cell');
		$cnic		=	$this->input->post('cnic');
		$password	=	$this->input->post('password');
		$this->db->set('name', $name);
		$this->db->set('age', $age);
		$this->db->set('email', $email);
		$this->db->set('address', $address);
		$this->db->set('cell', $cell);
		$this->db->set('cnic', $cnic);
		$this->db->set('password', $password);
		$this->db->where('id', $id);
		$result=$this->db->update('users');
		return $result;	
	}
	function deleteuser($id=null){
		
		$this->db->where('id', $id);
		
		$result=$this->db->delete('users');
		return $result;
	}	
}