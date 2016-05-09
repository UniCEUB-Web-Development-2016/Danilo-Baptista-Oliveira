<?php

include_once "model/Request.php";
include_once "model/Review.php";
include_once "database/DatabaseConnector.php";

class ReviewController
{
	public function register($request)
	{
		$params = $request->get_params();
		$review = new Review($params["name"],
				 $params["text"],
				 $params["tips"],
				 $params["videos"],
				 $params["images"]);

		$db = new DatabaseConnector("localhost", "reviewnstore", "mysql", "", "root", "");

		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($review));	
	}

	private function generateInsertQuery($review)
	{
		$query =  "INSERT INTO review (name, text, tips, videos,  images) 
		 VALUES ('".$review->getName()."','".
					$review->getText()."','".
					$review->getTips()."','".
					$review->getVideos()."','".
					$review->getImages()."')";

		return $query;						
	}

	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);

		$db = new DatabaseConnector("localhost", "facebook", "mysql", "", "root", "");

		$conn = $db->getConnection();

		$result = $conn->query("SELECT name, text, tips, videos, images FROM review WHERE ".$crit);

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