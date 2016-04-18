<?php

include "control/ControlManager.php";
//include na control manager
class RequestRouter
{
	
	public function route()
	{
     	return (new ControlManager)->getResource();
		//cria objeto control manager e referencia metodo getResource, e retorna.		
	}
}