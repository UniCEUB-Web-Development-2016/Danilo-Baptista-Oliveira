<?php

class Review
{
    private $name;
    private $text;
    private $tips;
    private $videos;
    private $images;
    
    public function __construct($name,$text,
    $tips, $videos, $images)
    {
        $this->name = $name;
        $this->text= $text;
        $this->tips = $tips;
        $this->videos = $videos;
        $this->images= $images;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getTips()
    {
        return $this->tips;
    }

    public function getVideos()
    {
        return $this->videos;
    }
    public function getImages()
    {
        return $this->images;
    }

}