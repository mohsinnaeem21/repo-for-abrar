<?php
class Logincontroller extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Loginmodel');
	}
	public function login(){	 
		$name= $this->input->post()['name'];
		$password= $this->input->post()['password'];
		
		if($this->Loginmodel->can_login($name,$password)){
			$data = array(
			'name' =>$name,
			);
			$this->session->set_userdata($data);
			redirect('all-users');
		}else{
			
			$this->session->set_flashdata('error','Invalid Username and Password');
			redirect('login');
		}
	}	
    public function loginform() {
		//print_r($this->router->routes);
		//die;
		$this->load->view('loginform');
	}
	public function logout(){
		 	  
		$this->session->sess_destroy();
		redirect('login');
	}
}