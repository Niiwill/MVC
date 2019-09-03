<?php 

namespace App;

/**
 * 
 */
class Validation{

	
	public $errors=array();
	
	public function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	public function validate_email($email){

		$email=$this->test_input($email);

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  
		  $this->errors[]='Email is not a valid email address';
		} 
		return $email;
	}

	public function validate_password($password){

   		$password =$this->test_input($password);
    
	    if (strlen($password) <= '8') {
	        $this->errors[] = "Your Password Must Contain At Least 8 Characters!";
	    }
	    elseif(!preg_match("#[0-9]+#",$password)) {
	        $this->errors[] = "Your Password Must Contain At Least 1 Number!";
	    }

	    return $password;
    		
	}


}
?>