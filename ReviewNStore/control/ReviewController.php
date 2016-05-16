<?php

include_once "model/Request.php";
include_once "model/Review.php";
include_once "database/DatabaseConnector.php";

class ReviewController
{

	private $requiredParameters = array('reviewname', 'text', 'tips', 'videos', 'images');

	public function register($request)
	{
		$params = $request->get_params();
		if($this->isValid($params)){
		$review = new Review($params["reviewname"],
				 $params["text"],
				 $params["tips"],
				 $params["videos"],
				 $params["images"]);

		$db = new DatabaseConnector("localhost", "reviewnstore", "mysql", "", "root", "");

		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($review));

	    } else {
            echo "Erro 400: Bad Request";
        }	
	}

	private function generateInsertQuery($review)
	{
		$query =  "INSERT INTO review (reviewname, text, tips, videos,  images) 
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

		$db = new DatabaseConnector("localhost", "reviewnstore", "mysql", "", "root", "");

		$conn = $db->getConnection();

		$result = $conn->query("SELECT reviewname, text, tips, videos, images FROM review WHERE ".$crit);

		//foreach($result as $row) 

		return $result->fetchAll(PDO::FETCH_ASSOC);

	}

	public function delete($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);

		$db = new DatabaseConnector("localhost", "reviewnstore", "mysql", "", "root", "");

		$conn = $db->getConnection();

		$result = $conn->query("DELETE FROM review WHERE ".$crit);

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