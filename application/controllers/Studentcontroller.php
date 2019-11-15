<?php
class Studentcontroller extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		//checkSession();
		 $this->load->library('upload');
		$this->load->model('Studentmodel');
	}
	function index() {
		$data = array(
			'page' => 'custom-pages/studentlist',
		);
		$this->load->view('homepage',$data);
	}
	
	function add_student_controller(){
		$data = array(
			'page' => 'custom-pages/addstudentform',
		);
		$this->load->view('homepage',$data);
	}
	function edit_form_controller($id = null){
	
		if($id != null){
			
			$usersData = $this->Studentmodel->isPresent_model($id);
			
			$data = array(
				'page' 	   => 'custom-pages/editstudentform',
				'usersData' => $usersData,
			);
			
		}else{
			$data = array(
				'page' 	   => 'custom-pages/editstudentform',
				'message' => "Record not found",
			);	
		}
		$this->load->view('homepage',$data);
	}
	function show_student_controller(){
		$result = $this->Studentmodel->student_list_model();
		$data = array(
			'page' 		=> 'custom-pages/studentlist',
			'usersData' => $result,
		);
		$this->load->view('homepage',$data);
	}

	function save_student_controller(){
		
		if($this->input->post()['save_student']){
			
			$config = array(
				'upload_path' => realpath(APPPATH . '../upload'),
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'overwrite' => TRUE,
				'max_size' => "20480000", // Can be set to particular file size , here it is 20 MB(2048 Kb)
				'max_height' => "768",
				'max_width' => "1024"
			);	
			// $this->load->library('upload');
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('s_school_leaving_certificate')) {
				$data = array('error' => $this->upload->display_errors());
				//Action, in case file upload failed
			} else {	
				$upload_data = $this->upload->data();
				$file_name = $upload_data['file_name'];
				$path = base_url()."upload/".$file_name;
				
				$savedata=$this->Studentmodel->save_student_model($path);
		
					redirect('Studentcontroller/add_student_controller');
			}
			
			}
			else{
				echo "Record Not Saved";
				die;
			}
		
	}		
	function update_student_controller(){
	
		if($this->input->post()['update_student']){
			/* if(isset($_FILES['s_school_leaving_certificate'])){
				
				//echo json_encode($_FILES['s_school_leaving_certificate']);
				//die;
				
			} */
			$old_path=$this->input->post()['path'];
			$splitted_old_string=explode("upload",$old_path);
			$old = end($splitted_old_string);
			$splite_old_again = explode("/",$old);
			$split= end($splite_old_again);
			
			if($split != $_FILES['s_school_leaving_certificate']['name'])
			{
				$delete_file = realpath(APPPATH.'../upload').$old;
				
					if(file_exists($delete_file)){
						@unlink($delete_file);
					}
			$config = array(
				'upload_path' => realpath(APPPATH . '../upload'),
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'overwrite' => TRUE,
				'max_size' => "20480000", // Can be set to particular file size , here it is 20 MB(2048 Kb)
			);
			
			$this->upload->initialize($config);
				if (!$this->upload->do_upload('s_school_leaving_certificate')) {
					$data = array('error' => $this->upload->display_errors());
					echo json_encode($data);
					die;
				}else {	
					$upload_data = $this->upload->data();
					$file_name = $upload_data['file_name'];
					$path = base_url()."upload/".$file_name;
					$updatedata=$this->Studentmodel->update_student_model($path);
					echo json_encode($updatedata);
					die;
				}
			}else{
				// echo $old_path;
				// die;
				$updatedata=$this->Studentmodel->update_student_model($old_path);
			}
				
				redirect('Studentcontroller/show_student_controller');
				//echo json_encode($data);
		}else
		{
			echo"Can not update record ! Please fill all the fields";
			die;
		}
	}
	function delete_student_controller($id = null){
		
		if($id != null){
			$usersData=$this->Studentmodel->delete_student_model($id);
			
		}else{
			echo"Can't delete record";
			die;	
		}
		redirect('Studentcontroller/show_student_controller');
	}			
}