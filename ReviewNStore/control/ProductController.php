<?php

include_once "model/Request.php";
include_once "model/Product.php";
include_once "database/DatabaseConnector.php";

class ProductController
{
	public function register($request)
	{
		$params = $request->get_params();
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

	private function generateCriteria($params) 
	{
		$criteria = "";
		foreach($params as $key => $value)
		{
			$criteria = $criteria.$key." LIKE '%".$value."%' OR ";
		}

		return substr($criteria, 0, -4);	
	}
}