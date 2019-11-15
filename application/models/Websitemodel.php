<?php
class Websitemodel extends CI_Model{

	function blog_list(){	
		$hasil=$this->db->get('blog')->result_array();
		return $hasil;
	}
	function author_blog_list($author_name=null){
		
	$this->db->where('author_name',$author_name);
	$hasil=$this->db->get('blog')->result_array();
	
	return $hasil;
	}
	function blog_detail($id=null){
		
		$this->db->where('id', $id);
		$result = $this->db->get('blog')->result_array();
		if(count($result) > 0){
			// echo json_encode($result[0]);
			// die;
			return $result[0];
		}else{
			return false;
		}
	}
}