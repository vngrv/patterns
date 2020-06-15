<?php

/**
 * Заместитель — это структурный паттерн проектирования, 
 * который позволяет подставлять вместо реальных объектов 
 * специальные объекты-заменители. Эти объекты перехватывают 
 * вызовы к оригинальному объекту, позволяя сделать что-то 
 * до или после передачи вызова оригиналу.
 */

interface Video
{
    function play();
}

class VideoPlayer implements Video
{
    private $title;
    public function __construct($title)
    {
        $this->title = $title;
    }

    public function play()
    {
        return "playing ".$this->title;
    }
}

class VideoPlayerProxy
{
    private $title;
    private $videoPlayer;

    public function __construct($title, $videoPlayer)
    {
        $this->title = $title;
        $this->videoPlayer = $videoPlayer;
    }

    public function play()
    {
        return $this->videoPlayer->play()." proxy 2";
    }  
}

$original = new VideoPlayer('People = shit');
var_dump($original->play());

$proxy = new VideoPlayerProxy('People = shit', $original);
var_dump($proxy->play());

