<?php 

namespace App;

use PDO;

class Database 
{

	private static $host=HOST;
	private static $dbname=DB;
	private static $user=USER;
	private static $pass=PASS;
	private $stmt;
	private $pdo;

	public function connect()
  	{
  		try {
  		  $this->pdo=new PDO("mysql:host=".self::$host.";dbname=".self::$dbname , self::$user, self::$pass);
		} catch (Exception $e) {
		  error_log($e->getMessage());
		  exit('Something weird happened'); //something a user can understand
		}
		return $this->pdo;

	}

	public function query($query){
		
    	$this->stmt=$this->connect()->prepare($query);
    	
	}

	public function execute($params)
	{
		 $this->stmt->execute($params); 
	}

	public function getData($params)
	{
		$this->execute($params);
		return $this->stmt->fetchAll();
	}

	public function getlastID()
	{
		return $this->pdo->lastInsertId();
	}







	
}



 ?>