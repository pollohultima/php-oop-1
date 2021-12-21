<?php

class Movie
{
    public $title;
    public $producer;
    public $country;
    public $year;
    public $rating;

    function __construct($title, $producer, $country, $year)
    {
        $this->title = $title;
        $this->producer = $producer;
        $this->country = $country;
        $this->year = $year;
        
    }

    public function setRating(float $rating){
        $this->rating=$rating;
    }
}

$movie_1= new Movie('Django Unchained', 'Quentin Tarantino', 'USA', '2012');
$movie_1->setRating('10');

$movie_2= new Movie('The Departed', 'Martin Scorsese', 'USA', '2006');
$movie_2->setRating('9.5');

var_dump($movie_1, $movie_2);