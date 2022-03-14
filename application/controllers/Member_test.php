<?php 

	class Member_test extends CI_Controller{

		public function __construct(){
			parent::__construct();
      		$this->load->model('Member_model');
		}

		// Test for all Members
		public function test_all_members(){
			$test_result = $this->School_model->display_all_members();

	        $expected_result = TRUE;
	        $test_name = "Check if all members are returned";
	        $unit_test = $this->unit->run($test_result, $expected_result, $test_name);
	        echo $unit_test;
		}

		// Test for all Members by ID
		public function test_members_by_id(){
			$test_result = $this->School_model->display_all_members_by_id(1);

	        $expected_result = TRUE;
	        $test_name = "Check if member exist from the ID";
	        $unit_test = $this->unit->run($test_result, $expected_result, $test_name);
	        echo $unit_test;
		}

	}

?>