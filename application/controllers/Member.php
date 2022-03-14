<?php 

class Member extends CI_Controller{

	public function __construct(){
		parent::__construct();
      	$this->load->helper('custom_helper');

      	$this->load->model('School_model');
      	$this->load->model('Member_model');
	}

	public function view(){
		$data['member'] = $this->Member_model->display_all_members();
		$member = $data['member'];
		if(empty($member)) $data['error'] = "No Member found"; // Check the return of the members

		$this->load->view('member/view', $data);
	}

	public function add(){
		// Form validation rules to check if the form is set
		$this->form_validation->set_rules('fullname', 'Full Name', 'trim|required');
	    $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|is_unique[member.email]');

	    $school_id = $this->input->post('school_id');
		$fullname = $this->input->post('fullname');
		$email = $this->input->post('email');
		$date = date('Y-m-d H:i:s');

		$success = "success";
	  	$failed = "failed";		
	  	$opp = "add";

	    $form_valid = $this->form_validation->run();
		$submit = $this->input->post('add');

		if($form_valid == FALSE){
			$data['school'] = $this->School_model->display_all_schools();
	        $this->load->view('member/add', $data);
	    }else{ 
	      if(isset($submit)){
	      	$insert = $this->Member_model->insert_member($school_id, $fullname, $email, $date); 
	      	
	      	if($insert){
	      		show_message($success, $add); // Inserts the input
	      		echo "<script>window.location.href='view';</script>";	
	      	}else{
	      		show_message($failed);
	      	}
	      }
	    }
	}

	public function edit($id){
		if(!empty($id)){ // Checks if the ID is empty or not
			$this->form_validation->set_rules('fullname', 'Full Name', 'trim|required');
	    	$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');

		    $form_valid = $this->form_validation->run();
			$submit = $this->input->post('edit');

			if($form_valid == FALSE){
				$data['school'] = $this->School_model->display_all_schools();
				$data['member'] = $this->Member_model->display_all_members_by_id($id);
				$this->load->view('member/edit', $data);
			}else{ 
		        if(isset($submit)){
		        	$school_id = $this->input->post('school_id');
					$fullname = $this->input->post('fullname');
					$email = $this->input->post('email');

					$success = "success";
				  	$failed = "failed";		
				  	$opp = "edit";

		        	$update = $this->Member_model->update_member($id, $school_id, $fullname, $email); 
		        	
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

	public function delete_member(){
      $id = $this->input->post('id');

      $this->Member_model->delete_member($id);
    }
}

?>