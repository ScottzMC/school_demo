<?php 

	function show_message($message, $opp){
		if($message == "success" && $opp == "add") echo "<script>alert('Added successfully');</script>";
		if($message == "success" && $opp == "edit") echo "<script>alert('Updated successfully');</script>";
		if($message == "success" && $opp == "require") echo "<script>alert('Please select a school');</script>";
		if($message == "failed") echo "<script>alert('Failed successfully');</script>";
	}

?>
