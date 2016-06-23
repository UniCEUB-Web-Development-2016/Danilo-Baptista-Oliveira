<?php

class User
{
	private $name;
	private $address;
	private $phone;
	private $email;
	private $password;
	

	public function __construct($name, $address,
	$phone, $email, $password)
	{
		$this->name = $name;
		$this->address = $address;
		$this->phone = $phone;
		$this->email = $email;
		$this->password = $password;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function getPhone()
	{
		return $this->phone;
	}

	public function getEmail()
	{
		return $this->email;
	}
	public function getPassword()
	{
		return $this->password;
	}

}