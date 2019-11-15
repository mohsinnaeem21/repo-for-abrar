<?php
class Studentmodel extends CI_Model{

	function student_list_model(){	
		$hasil=$this->db->get('student')->result_array();
		return $hasil;
	}
	function save_student_model($upload){
		$data = array(				
				'roll_number' 				  => $this->input->post()['s_roll_no'], 
				'name' 	  					  => $this->input->post()['s_name'], 
				'father_name'   			  => $this->input->post()['s_f_name'], 
				'age' 	  					  => $this->input->post()['s_age'], 
				'address' 					  => $this->input->post()['s_address'], 
				'class' 					  => $this->input->post()['s_class'],
				'date_of_birth' 			  => $this->input->post()['s_date_of_birth'],
				'previous_school' 			  => $this->input->post()['s_previous_school'],
				'phone_number' 	  			  => $this->input->post()['s_phone_number'],
				'cell_number' 	  			  => $this->input->post()['s_cell_number'], 
				'birth_certificate_number' 	  => $this->input->post()['s_birth_certificate_number'],
				'school_leaving_certificate'  => $upload
			);
			// echo json_encode($data['school_leaving_certificate']);
			// die;
		$result=$this->db->insert('student',$data);
		return $result;
	}
	function isPresent_model($id=null){
		
		$this->db->where('id', $id);	
		$result = $this->db->get('student')->result_array();
		if(count($result) > 0){
			// echo json_encode($result[0]);
			// die;		
			return $result[0];
		}else{
			return false;
		}
	}
	
	function update_student_model($path){
		$id=$this->input->post('s_id');
		$roll_number=$this->input->post('s_roll_no');
		$name=$this->input->post('s_name');
		$father_name=$this->input->post('s_f_name');
		$age=$this->input->post('s_age');
		$address=$this->input->post('s_address');
		$class=$this->input->post('s_class');
		$date_of_birth=$this->input->post('s_date_of_birth');
		$previous_school=$this->input->post('s_previous_school');
		$phone_number=$this->input->post('s_phone_number');
		$cell_number=$this->input->post('s_cell_number');
		$birth_certificate_number=$this->input->post('s_birth_certificate_number');
		$school_leaving_certificate= $path;
		
		// echo $school_leaving_certificate;
		// die;
		
		$this->db->set('name', $name);
		$this->db->set('father_name', $father_name);
		$this->db->set('age', $age);
		$this->db->set('address', $address);
		$this->db->set('class', $class);
		$this->db->set('date_of_birth', $date_of_birth);
		$this->db->set('previous_school', $previous_school);
		$this->db->set('phone_number', $phone_number);
		$this->db->set('cell_number', $cell_number);
		$this->db->set('birth_certificate_number', $birth_certificate_number);
		$this->db->set('school_leaving_certificate', $school_leaving_certificate);
		$this->db->where('id', $id);
		$result=$this->db->update('student');
		
		return $result;	
	}
	function delete_student_model($id=null){
		
		$this->db->where('id', $id);
		
		$result=$this->db->delete('student');
		return $result;
	}	
}