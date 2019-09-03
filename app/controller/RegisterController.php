<?php 

namespace App\Controller;

use App\Validation;
use \App\Model\Register;


class RegisterController extends Controller{



	public function index(){
	
		$this->renderView('register');

	}


	public function register(){

		$validation=new Validation();

		//validate NAME input
		$name=$validation->test_input($_POST['name']);

		//validate EMAIL input
		$email=$validation->validate_email($_POST['email']);

		//validate PASSWORD input
		$password=$validation->validate_password($_POST['password']);
		

		if(count($validation->errors)){
			$data=array('errors' => $validation->errors);
			
			$this->renderView('register',$data);

		}else{

			$user=new Register();
			// get inerted user ID to store in session
			$lastID=$user->registerUser($name,$email,$password);

			if(isset($lastID)){

				$_SESSION['user_id'] = $lastID;
				header("Location: /");

			}else{
				$data='User not found';
				$this->renderView('login',$data);
			}
			
		}

	}

	
}


 ?>