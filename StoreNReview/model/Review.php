<?php

class Review
{    
    //Name,Nick,Tips,videos,text,images
    //private $id;
    private $name;
    private $nick;
    private $tips; //search for a better alias
    private $videos;
    private $text;


    public function __construct($name, $nick, $tips, $videos, $text)
    {
        $this->setName($name);
        $this->setNick($nick);
        $this->setTips($tips);
        $this->setVideos($videos);
        $this->setText($text);
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setNick($Nick)
    {
        $this->nick = $nick;
    }

    public function setTips($tips)
    {
        $this->tips = $tips;
    }

    public function setVideos($videos)
    {
        $this->videos = $videos;
    }
     public function setPassword($text)
    {
        $this->text = $text;
    }


    public function getName()
    {
        return $this->name;
    }

    public function getNick()
    {
        return $this->nick;
    }
    public function getTips()
    {
        return $this->tips;
    }
    public function getVideos()
    {
        return $this->videos;
    }

    public function getText()
    {
        return $this->text;
    }
}