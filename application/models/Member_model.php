<?php 

class Member_model extends CI_Model{

	// Members 

	public function display_all_members(){
		$this->db->select('*');
		$this->db->from('school');
		$this->db->join('member', 'member.school_id = school.id');
		$this->db->order_by('member.fullname', 'ASC');
		return $this->db->get()->result_array();
	}

	public function display_all_members_by_id($id){
		$this->db->select('*');
		$this->db->from('school');
		$this->db->join('member', 'member.school_id = school.id');
		$this->db->where('member.id', $id);
		$this->db->order_by('member.fullname', 'ASC');
		return $this->db->get()->result_array();
	}

	public function insert_member($school_id, $fullname, $email, $date){
		$data = array(
			'school_id' => $school_id,
			'fullname' => $fullname,
			'email' => $email,
			'created_at' => $date
		);

		$escape_data = $this->db->escape_str($data);
		return $this->db->insert('member', $escape_data);
	}

	public function update_member($id, $school_id, $fullname, $email){
		if($school_id == 'empty'){ // Checks if the select option is empty
			$data = array(
			'fullname' => $fullname,
			'email' => $email
			);
		}else{
			$data = array(
			'school_id' => $school_id,
			'fullname' => $fullname,
			'email' => $email
			);
		}

		$escape_data = $this->db->escape_str($data);
		$this->db->where('id', $id);
		return $this->db->update('member', $escape_data);
	}

	public function delete_member($id){
        	$this->db->where('id', $id);
       		return $this->db->delete("member");
    	}

	// End of Memebers
}

?>
