<?php 

class School_test extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('School_model');
	}

	// Test for all School
	public function test_all_school(){
		$test_result = $this->School_model->display_all_schools();

		$expected_result = TRUE;
		$test_name = "Check if all schools are returned";
		$unit_test = $this->unit->run($test_result, $expected_result, $test_name);
		echo $unit_test;
	}

	// Test for School by ID
	public function test_school_by_id(){
		$test_result = $this->School_model->display_school_by_id(15);

		$expected_result = TRUE;
		$test_name = "Check if school exist from the ID";
		$unit_test = $this->unit->run($test_result, $expected_result, $test_name);
		echo $unit_test;
	}

	// Test the members in School
	public function test_members_by_school(){
		$test_result = $this->School_model->display_all_members_in_school(15);

		$expected_result = TRUE;
		$test_name = "Check if member exist from the School ID";
		$unit_test = $this->unit->run($test_result, $expected_result, $test_name);
		echo $unit_test;
	}

}

?>
