<?php

class User
{    
    //name, address,phone,email,password
    //private $id;
    private $name;
    private $address;
    private $phone; //search for a better alias
    private $email;
    private $password;


    public function __construct($name, $adress, $phone, $email, $password)
    {
        $this->setName($name);
        $this->setAdress($address);
        $this->setPhone($phone);
        $this->setEmail($email);
        $this->setPassword($password);
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
     public function setPassword($password)
    {
        $this->store = $store;
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