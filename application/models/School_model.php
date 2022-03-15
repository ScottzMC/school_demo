<?php 

class School_model extends CI_Model{

	// School

	public function display_all_schools(){
		$this->db->order_by('school_name', 'ASC');
		return $this->db->get("school")->result_array();
	}

	public function display_school_by_id($id){
		$this->db->order_by('school_name', 'ASC');
		$this->db->where('id', $id);
		return $this->db->get("school")->result_array();
	}

	public function display_all_members_in_school($id){
		$this->db->select('*');
		$this->db->from('school');
		$this->db->join('member', 'member.school_id = school.id');
		$this->db->where('school.id', $id);
		$this->db->order_by('member.fullname', 'ASC');
		return $this->db->get()->result_array();
	}

	public function insert_school($school_name, $address, $county, $city, $postcode, $registered_date, $date){
		$data = array(
			'school_name' => $school_name,
			'address' => $address,
			'county' => $county,
			'city' => $city,
			'postcode' => $postcode,
			'registered_at' => $registered_date,
			'created_at' => $date
		);

		// Escapes the string to protect it from SQL Injection
		$escape_data = $this->db->escape_str($data);
		return $this->db->insert("school", $escape_data);
	}

	public function update_school($id, $school_name, $address, $county, $city, $postcode){
		$data = array(
			'school_name' => $school_name,
			'address' => $address,
			'county' => $county,
			'city' => $city,
			'postcode' => $postcode
		);

		$escape_data = $this->db->escape_str($data);

		$this->db->where('id', $id);
		$query = $this->db->update("school", $escape_data);
		return $query;
	}

	public function delete_school($id){
        $this->db->where('id', $id);
        return $this->db->delete("school");
    }

	// End of School  

}

?>
