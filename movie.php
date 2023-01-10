<?php

class Movie { 
    public $title;
    public $genre;
    public $plot;
    public $year;
    public $time;

    public function __construct(string $title, string $genre, int $time)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->time = $time;
    }
}