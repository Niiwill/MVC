<?php 

    $router = new \Bramus\Router\Router();

    // Static route: / (homepage)
    $router->get('/', function () {
   		return getController('LoginController','index');   		 
	});

	$router->post('/login', function() {
   		return getController('LoginController','login');   		 
	});

	$router->get('/register', function() {
   		return getController('RegisterController','index');   		 
	});

	$router->post('/register', function() {
   		return getController('RegisterController','register');   		 
	});

	$router->get('/logout', function() {
   		return getController('LoginController','logout');   		 
	});


    $router->run();


?>