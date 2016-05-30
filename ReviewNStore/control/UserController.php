<?php

include_once "model/Request.php";
include_once "model/User.php";
include_once "database/DatabaseConnector.php";

class UserController
{
	private $requiredParameters = array('first_name', 'address', 'phone', 'email', 'password');

	public function register($request)
	{
		$params = $request->get_params();
		if($this->isValid($params)){
		$user = new User($params["first_name"],
				 $params["address"],
				 $params["phone"],
				 $params["email"],
				 $params["password"]);

		$db = new DatabaseConnector("localhost", "reviewnstore", "mysql", "", "root", "");

		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($user));	
	}else{
		echo "Erro 400: Bad Request";
	}

	}

	private function generateInsertQuery($user)
	{
		$query =  "INSERT INTO user (first_name, address, phone, email,  pass) 
		 VALUES ('".$user->getName()."','".
					$user->getAddress()."','".
					$user->getPhone()."','".
					$user->getEmail()."','".
					$user->getPassword()."')";

		return $query;						
	}


	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);

		$db = new DatabaseConnector("localhost", "reviewnstore", "mysql", "", "root", "");

		$conn = $db->getConnection();

		$result = $conn->query("SELECT first_name, address, phone, email, pass FROM user WHERE ".$crit);

		//foreach($result as $row) 

		return $result->fetchAll(PDO::FETCH_ASSOC);

	}

	// UPDATE
		//--------------------------------------------------------------------------------------------------------------------


	public function update($request)
    {
        $params = $request->get_params();

        $db = new DatabaseConnector("localhost", "reviewnstore", "mysql", "", "root", "");

        $conn = $db->getConnection();

        return $conn->query($this->generateUpdateQuery($params));
    }

    private function generateUpdateQuery($params)
    {
        $crit = $this->generateUpdateCriteria($params);

        return "UPDATE user SET " . $crit . " WHERE first_name = '" . $params["first_name"] . "'";
    }

    private function generateUpdateCriteria($params)
    {
        $criteria = "";
        foreach ($params as $key => $value)
        {
            $criteria = $criteria.$key." = '".$value."' ,";
        }

        return substr($criteria, 0, -2);
    }

	//DELETE

	//--------------------------------------------------------------------------------------------------------------------
		public function delete($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);

		$db = new DatabaseConnector("localhost", "reviewnstore", "mysql", "", "root", "");

		$conn = $db->getConnection();

		$result = $conn->query("DELETE FROM user WHERE ".$crit);

		//foreach($result as $row) 

		return $result->fetchAll(PDO::FETCH_ASSOC);

	}
	//------------------------------------------------------------------------------------------------------------------------
	private function generateCriteria($params) 
	{
		$criteria = "";
		foreach($params as $key => $value)
		{
			$criteria = $criteria.$key." LIKE '%".$value."%' OR ";
		}

		return substr($criteria, 0, -4);	
	}

	private function isValid($parameters)
    {
        $keys = array_keys($parameters);
        $diff1 = array_diff($keys, $this->requiredParameters);
        $diff2 = array_diff($this->requiredParameters, $keys);

        if (empty($diff2) && empty($diff1))
            return true;

        return false;

    }

    

	
}