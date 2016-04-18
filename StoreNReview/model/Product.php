<?php

class Product
{    
    //name,genre,console,year,store,price,review
    //private $id;
    private $name;
    private $genre;
    private $console; //search for a better alias
    private $year;
    private $store;
    private $price;
    private $review;

    public function __construct($name, $genre, $console, $year,$store,$price,$review)
    {
        $this->setName($name);
        $this->setGenre($genre);
        $this->setConsole($console);
        $this->setYear($year);
        $this->setStore($store);
        $this->setPrice($price);
        $this->setReview($review);
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    public function setConsole($console)
    {
        $this->console = $console;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }
     public function setStore($store)
    {
        $this->store = $store;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setReview($review)
    {
        $this->review = $review;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGenre()
    {
        return $this->genre;
    }
    public function getConsole()
    {
        return $this->console;
    }
    public function getYear()
    {
        return $this->year;
    }

    public function getStore()
    {
        return $this->store;
    }
    public function getPrice()
    {
        return $this->price;
    }

    public function getReview()
    {
        return $this->review;
    }
}