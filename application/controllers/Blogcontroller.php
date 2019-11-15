<?php
class Blogcontroller extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		//checkSession();
		$this->load->helper('text');
		$this->load->library('upload');
		$this->load->model('Blogmodel');
	}
	function index() {
		$data = array(
			'page' => 'custom-pages/bloglist',
		);
		$this->load->view('homepage',$data);
	}
	
	function add_blog(){
		$data = array(
			'page' => 'custom-pages/blogform',
		);
		$this->load->view('homepage',$data);
	}
	function edit_blog($id = null){
	
		if($id != null){
			
			$usersData = $this->Blogmodel->isPresent_model($id);
			
			$data = array(
				'page' 	   => 'custom-pages/editblogform',
				'usersData' => $usersData,
			);
			
		}else{
			$data = array(
				'page' 	   => 'custom-pages/editblogform',
				'message' => "Record not found",
			);	
		}
		$this->load->view('homepage',$data);
	}
	function show_blog(){
		$result = $this->Blogmodel->blog_list();
		$data = array(
			'page' 		=> 'custom-pages/bloglist',
			'usersData' => $result,
		);
		$this->load->view('homepage',$data);
	}

	function save_blog(){
		// print_r($this->input->post());
		// die;
		if($this->input->post()['save_blogs']){
			
			$config = array(
				'upload_path' => realpath(APPPATH . '../blogupload'),
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'overwrite' => TRUE,
				'max_size' => "20480000", // Can be set to particular file size , here it is 20 MB(2048 Kb)
				'max_height' => "768",
				'max_width' => "1024",
				'width'     => "75",
				'height'    => "50"
			);			
			 // $this->load->library('upload');
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('b_image')) {
				$data = array('error' => $this->upload->display_errors());
				//Action, in case file upload failed
			} else {	
				$upload_data = $this->upload->data();
				$file_name = $upload_data['file_name'];
				$path = base_url()."blogupload/".$file_name;
				
				$savedata=$this->Blogmodel->save_blog($path);
		
					redirect('Blogcontroller/add_blog');
			}
			}
			else{
				echo "Record Not Saved";
				die;
			}
		
	}		
	function update_blog(){
	
		if($this->input->post()['update_blogs']){
			/* if(isset($_FILES['b_image'])){
				
				//echo json_encode($_FILES['b_image']);
				//die;
				
			} */
			$old_path=$this->input->post()['path'];
			$splitted_old_string=explode("blogupload",$old_path);
			$old = end($splitted_old_string);
			$splite_old_again = explode("/",$old);
			$split= end($splite_old_again);
			
			if($split != $_FILES['b_image']['name'])
			{
				$delete_file = realpath(APPPATH.'../blogupload').$old;
				
					if(file_exists($delete_file)){
						@unlink($delete_file);
					}
			$config = array(
				'upload_path' => realpath(APPPATH . '../blogupload'),
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'overwrite' => TRUE,
				'max_size' => "20480000", // Can be set to particular file size , here it is 20 MB(2048 Kb)
				'width'     => "75",
				'height'    => "50"
			);
			
			$this->upload->initialize($config);
				if (!$this->upload->do_upload('b_image')) {
					$data = array('error' => $this->upload->display_errors());
					//echo json_encode($data);
					//die;
				}else {	
					$upload_data = $this->upload->data();
					$file_name = $upload_data['file_name'];
					$path = base_url()."blogupload/".$file_name;
					$updatedata=$this->Blogmodel->update_blog($path);
					// echo json_encode($updatedata);
					// die;
				}
			}else{
				// echo $old_path;
				// die;
				$updatedata=$this->Blogmodel->update_blog($old_path);
			}
				
				redirect('Blogcontroller/show_blog');
				//echo json_encode($data);
		}else
		{
			echo"Can not update record ! Please fill all the fields";
			die;
		}
	}
	function delete_blog($id = null){
		
		if($id != null){
			$usersData=$this->Blogmodel->delete_blog($id);
			
		}else{
			echo"Can't delete record";
			die;	
		}
		redirect('Blogcontroller/show_blog');
	}			
}