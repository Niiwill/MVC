<?php 


function getController($controllerName, $method)
{

	$filepath="../app/controller/".$controllerName.".php";
	if(file_exists($filepath)){

		$className='App\\Controller\\'.$controllerName;

		$class=new $className();
		$class->$method();
		
	}
}


 ?>