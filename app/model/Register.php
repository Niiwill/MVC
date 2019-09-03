<?php 
namespace App\Model;

use App\Database;

class Register extends Database
{

	public function registerUser($name,$email,$password){

		$this->query('INSERT INTO users (name, email, password) VALUES (?,?,?)');
		$this->execute([$name,$email,$password]);
		return $this->getlastID();
	}

	
}

?>