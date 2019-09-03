<?php 

namespace App\Controller;


use \App\View\View;

/**
 * 
 */
class Controller
{

	public function renderView($view,$data=null){

		require '../view/'.$view.'.php';

	}


}



?>