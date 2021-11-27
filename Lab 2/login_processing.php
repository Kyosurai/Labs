<?php
	//get the values from $_POST array
	$user_id = $_POST['id'];
	$pw = $_POST['pw'];
	
	//hardcode login credentials
	$testId = "Superman";
	$testPw = "Wonderwoman";
	
	//variables that hold validation check result
	$filledForm = false;
	
	
	//check whether compulsory fields are empty and display appropriate error message
	if (empty($user_id) && empty($pw)) {
		echo "Please enter your ID and password";
	} elseif (empty($user_id)) {
		echo "Please enter your ID";
	} elseif (empty($pw)) {
		echo "Please enter your password";
	} else {
		$filledForm = true;
	}
	
	//if user's input has passed all validation checks,
	if ($filledForm == true) {
		//check whether the login credentials are valid and display the appropriate message
		if ($user_id == $testId && $pw == $testPw) {
			echo "You have successfully logged in.";
		} else {
			echo "Incorrect ID and/or password";
		}
	}
?>





