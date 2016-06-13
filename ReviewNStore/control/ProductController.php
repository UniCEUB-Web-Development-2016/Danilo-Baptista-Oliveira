<?php

include_once "model/Request.php";
include_once "model/Product.php";
include_once "database/DatabaseConnector.php";

class ProductController
{
	private $requiredParameters = array('first_name','genre','console','date','store','price','review');

	public function register($request)
	{
		$params = $request->get_params();
		if($this->isValid($params)){
		$product = new Product($params["first_name"],
				 $params["genre"],
				 $params["console"],
				 $params["date"],
				 $params["store"],
				 $params["price"],
				 $params["review"]
				 );

		$db = new DatabaseConnector("localhost", "reviewnstore", "mysql", "", "root", "");

		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($product));
	   
		}else{
			echo "Erro 400:Bad Rquest";
	
		}
	}

	private function generateInsertQuery($product)
	{
		$query =  "INSERT INTO product (first_name, genre, console, date, store, price, review) 
		 VALUES ('".$product->getName()."','".
					$product->getGenre()."','".
					$product->getConsole()."','".
					$product->getDate()."','".
					$product->getStore()."','".
					$product->getPrice()."','".
					$product->getReview()."')";

		return $query;						
	}
//SELECT
	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);

		$db = new DatabaseConnector("localhost", "reviewnstore", "mysql", "", "root", "");

		$conn = $db->getConnection();

		$result = $conn->query("SELECT first_name, genre, console, date,store,price,review FROM product WHERE ".$crit);

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

        return "UPDATE product SET " . $crit . " WHERE first_name = '" . $params["first_name"] . "'";
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
//-----------------------------------------------------------------------------


			public function delete($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);

		$db = new DatabaseConnector("localhost", "reviewnstore", "mysql", "", "root", "");

		$conn = $db->getConnection();

		$result = $conn->query("DELETE FROM product WHERE ".$crit);

		//foreach($result as $row) 

		return $result->fetchAll(PDO::FETCH_ASSOC);

	}
	private function generateCriteria($params) 
	{
		$criteria = "";
		foreach($params as $key => $value)
		{
			$criteria = $criteria.$key." LIKE '%".$value."%' AND ";
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