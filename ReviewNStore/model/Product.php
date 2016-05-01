<?php

class Product
{
    private $name;
    private $genre;
    private $console;
    private $date;
    private $store;
    private $price;
    private $review;
    
    public function __construct($name,$genre,
    $console, $date, $store, $price, $review)
    {
        $this->name = $name;
        $this->genre= $genre;
        $this->console = $console;
        $this->date = $date;
        $this->store= $store;
        $this->price = $price;
        $this->review= $review;
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

    public function getDate()
    {
        return $this->date;
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