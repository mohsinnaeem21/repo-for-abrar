<?php
class Websitecontroller extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		$this->load->model('Websitemodel');
		 $this->load->helper('text');
	}
	function index() {
		
		$this->load->view('custom-pages/Website');
	}
	function show_blog(){
		$result = $this->Websitemodel->blog_list();
		$data = array(
			'usersData' => $result,
		);
		// echo json_encode($data);
		// die;
		$this->load->view('custom-pages/Website',$data);
	}
	
	function show_author_blog($author_name=null){
		
		//echo"In author block";
		//echo $author_name;
		//die;
		if($author_name!=null){
		$result = $this->Websitemodel->author_blog_list($author_name);
		$data = array(
			'usersData' => $result,
		);
		}
		$this->load->view('custom-pages/Website',$data);
	}
	function detail_view($id=null){
		
		//echo"In author block";
		//echo $author_name;
		//die;
		if($id!=null){
		$result = $this->Websitemodel->blog_detail($id);
		$data = array(
			'usersData' => $result,
		);
		}
		$this->load->view('custom-pages/blogdetail',$data);
	}
}