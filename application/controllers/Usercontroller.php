<?php
class Usercontroller extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		checkSession();
	
		$this->load->model('Usermodel');
	}
	function homepage(){
		redirect('all-users');
	}	
	function addform(){
		$data = array(
			'page' => 'custom-pages/addform',
		);
		$this->load->view('homepage',$data);
	}
	function editform($id = null){
	
		if($id != null){
			$usersData = $this->Usermodel->isPresent($id);
			$data = array(
				'page' 	   => 'custom-pages/edit',
				'usersData' => $usersData,
			);
		}else{
			$data = array(
				'page' 	   => 'custom-pages/edit',
				'message' => "Record not found",
			);	
		}
		$this->load->view('homepage',$data);
	}
	function show(){
		$result = $this->Usermodel->userlist();
		$data = array(
			'page' 		=> 'custom-pages/home',
			'usersData' => $result,
		);
		$this->load->view('homepage',$data);
	}
	function save(){
		// print_r($this->input->post());
		// die;
		if($this->input->post()['saveusers']){
			
			if($this->input->post()['name'] != null && $this->input->post()['age'] != null && $this->input->post()['email']!= null && $this->input->post()['address'] != null && $this->input->post()['cnic'] != null && $this->input->post()['cell'] != null){
			
				$savedata=$this->Usermodel->saveuser();
				$data = array(
					'page' 		=> 'custom-pages/addform',	
					
				);
			}else{
				echo "Record Not Saved";
				die;
			}
		}
		redirect('create');
		//echo json_encode($data);
	}		
	function update(){
		
		if($this->input->post()['updatedata']){
			if($this->input->post()['name'] != null && $this->input->post()['age'] != null && $this->input->post()['email']!= null && $this->input->post()['address'] != null && $this->input->post()['cnic'] != null && $this->input->post()['cell'] != null){
				$updatedata=$this->Usermodel->updateuser();
		}else
		{
			echo"Can not update record ! Please fill all the fields";
			die;
		}
		}
		redirect('all-users');
		//echo json_encode($data);
	}
	function delete($id = null){
		
		if($id != null){
			$usersData=$this->Usermodel->deleteuser($id);
			
		}else{
			echo"Can't delete record";
			die;	
		}
		redirect('all-users');
		//	echo json_encode($data);
	}
	
	public function override_404(){
		redirect('all-users');
	}
}