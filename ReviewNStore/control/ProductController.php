<?php

include_once "model/Request.php";
include_once "model/Product.php";
include_once "database/DatabaseConnector.php";

class ProductController
{
	public function register($request)
	{
		$params = $request->get_params();
		$product = new Product($params["name"],
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

	private function generateInsertQuery($review)
	{
		$query =  "INSERT INTO product (name, genre, console, date, store, price, review) 
		 VALUES ('".$review->getName()."','".
					$review->getGenre()."','".
					$review->getConsole()."','".
					$review->getDate()."','".
					$review->getStore()."','".
					$review->getPrice()."','".
					$review->getReview()."')";

		return $query;						
	}
}