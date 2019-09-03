<?php 

namespace App\Controller;

use \App\Model\Login;
use App\Validation;


class LoginController extends Controller{



	public function index(){

		// Check if user is logged in
		if(isset($_SESSION['user_id'])){

			$this->renderView('dashboard');
		}else{
			$this->renderView('login');
		}
	

	}

	public function login(){


		$validation=new Validation();

		//validate inputs
		$email=$validation->test_input($_POST['email']);
		$password=$validation->test_input($_POST['password']);

		$user=new Login();
		$data=$user->checkUser($email,$password);

		if(count($data)){

			$_SESSION['user_id'] = true;

			$this->renderView('dashboard');
		}else{
			$data='User not found';
			$this->renderView('login',$data);
		}

		

	}

	public function logout(){

		session_destroy();
		header("Location: /");


	}
}


 ?>