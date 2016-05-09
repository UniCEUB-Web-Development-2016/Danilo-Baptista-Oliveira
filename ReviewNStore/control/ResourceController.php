<?php

include_once "model/Request.php";
include_once "control/UserController.php";
include_once "control/ReviewController.php";
include_once "control/ProductController.php";

class ResourceController
{

	private $controlMap = 
	[
		"review" => "ReviewController",
		"user" => "UserController",
		"product" => "ProductController",
	];

	public function createResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->register($request);
	}

	public function searchResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->search($request);
	}
}

}