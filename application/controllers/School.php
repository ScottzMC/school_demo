<?php 

class School extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('custom_helper'); // Loading the custom helper
      		$this->load->model('School_model'); 
	}
	
	public function view(){
		$data['school'] = $this->School_model->display_all_schools();
		$school = $data['school'];

		// Check the return of the school
		if(empty($school)) $data['error'] = "No School found";

		$this->load->view('school/view', $data);
	}

	public function detail($id){	
		$data['school'] = $this->School_model->display_school_by_id($id);
		$school = $data['school'];
		
		if(empty($school)) $data['error'] = "No School found"; // Checks if the School exist
			$data['member'] = $this->School_model->display_all_members_in_school($id);
			$member = $data['member'];
		
		if(empty($member)) $data['error'] = "No Member found"; // Checks if the Members exist
			
		$this->load->view('school/detail', $data);
	}

	public function add(){
		// Form validation rules to check if the form is set
		$this->form_validation->set_rules('school_name', 'School', 'trim|required');
    		$this->form_validation->set_rules('address', 'Address', 'trim|required');
    		$this->form_validation->set_rules('county', 'County', 'trim|required');
    		$this->form_validation->set_rules('city', 'City', 'trim|required');
    		$this->form_validation->set_rules('postcode', 'Postcode', 'trim|required');
    		$this->form_validation->set_rules('registered_at', 'Registered at', 'trim|required');

		$form_valid = $this->form_validation->run();
		$submit = $this->input->post('add');

    		if($form_valid == FALSE){
        		$this->load->view('school/add');
    		}else{ 
      			if(isset($submit)){
      				$school_name = $this->input->post('school_name');
				$address = $this->input->post('address');
				$county = $this->input->post('county');
				$city = $this->input->post('city');
				$postcode = $this->input->post('postcode');
				$registered_date = $this->input->post('registered_at');
				$date = date('Y-m-d H:i:s');	

				$success = "success";
		  		$failed = "failed";		
		  		$opp = "add";

		// Inserts the input
		$insert = $this->School_model->insert_school($school_name, $address, $county, $city, $postcode, $registered_date, $date); 
      	
      		if($insert){
         		show_message($success, $opp); // Shows a message
      			echo "<script>window.location.href='view';</script>";	// Redirects the user upon action
      		}else{
      			show_message($failed); 
      		}
      	    }
          }
	}

	public function edit($id){
		if(!empty($id)){ // Checks if the ID is empty or not
			$this->form_validation->set_rules('school_name', 'School', 'trim|required');
      			$this->form_validation->set_rules('address', 'Address', 'trim|required');
      			$this->form_validation->set_rules('county', 'County', 'trim|required');
      			$this->form_validation->set_rules('city', 'City', 'trim|required');
      			$this->form_validation->set_rules('postcode', 'Postcode', 'trim|required');

      			$form_valid = $this->form_validation->run();
			$submit = $this->input->post('edit');

			if($form_valid == FALSE){
				$data['school'] = $this->School_model->display_school_by_id($id);
				$this->load->view('school/edit', $data);
			}else{ 
        			if(isset($submit)){
        				$school_name = $this->input->post('school_name');
					$address = $this->input->post('address');
					$county = $this->input->post('county');
					$city = $this->input->post('city');
					$postcode = $this->input->post('postcode');

					$success = "success";
			  		$failed = "failed";		

			  		$opp = "edit";

			  	// Updates the input
        			$update = $this->School_model->update_school($id, $school_name, $address, $county, $city, $postcode); 
        	
        			if($update){
        				show_message($success, $opp);
        				echo "<script>window.location.href='../view';</script>";	
        			}else{
        				show_message($failed);
        			}
        		}
      		    }
		}else{
			show_404();
		}
	}

	public function delete_school(){
    		$id = $this->input->post('id');

    		$this->School_model->delete_school($id);
  	}
}

?>
