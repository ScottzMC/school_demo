<?php 

	function show_message($message, $opp){

		if($message == "success" && $opp == "add"){
			echo "<script>alert('Added successfully');</script>";
		}else if($message == "success" && $opp == "edit"){
			echo "<script>alert('Updated successfully');</script>";
		}else if($message == "failed"){
			echo "<script>alert('Failed successfully');</script>";
		}
	}

?>