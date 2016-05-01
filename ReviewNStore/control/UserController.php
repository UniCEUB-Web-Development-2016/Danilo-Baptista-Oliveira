<?php

include_once "model/Request.php";
include_once "model/User.php";
include_once "database/DatabaseConnector.php";

class UserController
{
	public function register($request)
	{
		$params = $request->get_params();
		$user = new User($params["name"],
				 $params["address"],
				 $params["phone"],
				 $params["email"],
				 $params["password"]);

		$db = new DatabaseConnector("localhost", "reviewnstore", "mysql", "", "root", "");

		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($user));	
	}

	private function generateInsertQuery($user)
	{
		$query =  "INSERT INTO user (name, address, phone, email,  pass) 
		 VALUES ('".$user->getName()."','".
					$user->getAddress()."','".
					$user->getPhone()."','".
					$user->getEmail()."','".
					$user->getPassword()."')";

		return $query;						
	}
}