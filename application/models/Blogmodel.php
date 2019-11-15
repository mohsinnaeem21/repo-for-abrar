<?php
class Blogmodel extends CI_Model{

	function blog_list(){	
		$hasil=$this->db->get('blog')->result_array();
		return $hasil;
	}
	function save_blog($upload){
		$data = array(				
				'title' 	 => $this->input->post()['b_title'], 
				'content' 	 => $this->input->post()['b_content'], 
				'image' 	 => $upload
			);
			// echo json_encode($data['school_leaving_certificate']);
			// die;
		$result=$this->db->insert('blog',$data);
		return $result;
	}
	function isPresent_model($id=null){
		
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
	
	function update_blog($path){
		$id=$this->input->post('b_id');
		$title=$this->input->post('b_title');
		$content=$this->input->post('b_content');
		$image= $path;
		
		// echo $school_leaving_certificate;
		// die;
		
		$this->db->set('title', $title);
		$this->db->set('content', $content);
		$this->db->set('image', $image);
		$this->db->where('id', $id);
		$result=$this->db->update('blog');
		
		return $result;	
	}
	function delete_blog($id=null){
		
		$this->db->where('id', $id);
		
		$result=$this->db->delete('blog');
		return $result;
	}	
}