<?php 
namespace App\Model;

use App\Database;

class Login extends Database
{

	public function checkUser($email,$password){

		$this->query('SELECT * FROM users WHERE email=? AND password=?');
		return $this->getData([$email,$password]);

	}

	
}
 ?>