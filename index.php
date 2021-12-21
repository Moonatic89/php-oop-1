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

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>
        <?php
        $matrix = new Movie("Matrix", "SciFI", "A movie about a savior in a dystopic world", 8.9, "Wachowski Brothers");
        $rings = new Movie("The Lord of the Rings", "Fantasy", "A movei about a savior in a fantasy world", 8.8, "Peter Jackson");
        echo var_dump($matrix, $rings)
        ?>
    </h1>

</body>

</html>