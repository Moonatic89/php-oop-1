<?php
class Movie
{

    public $name;
    public $genre;
    public $desc;
    public $rating;
    public $director;

    function __construct(string $name, string $genre, string $desc, float $rating, string $director)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->desc = $desc;
        $this->rating = $rating;
        $this->director = $director;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function getDesc()
    {
        return $this->desc;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function getDirector()
    {
        return $this->director;
    }
}