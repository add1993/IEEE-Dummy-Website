<?php

	function chkname($name){
		if(!preg_match("/^[a-zA-Z ]*$/",$name)){
			return false;
			// only letters and white space is allowed
		}
		return true;
	}
	function chkemail($email){
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     	 	return false;
     	 	//"Invalid email format"; 
    	}
    	return true;
	}
	function chkphone($phone){
		if(!preg_match('/^\d{10}$/',$phone)){
			return false;
			// invalid phone number
    	}
    	return true;
	}
?>
