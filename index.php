<?php

/* create class Movie */
class Movie
{
    /* initiate instance variables */
    public $title;
    public $poster_image;
    public $secondary_image;
    public $realise_date;
    public $description;

    /* define constructor */
    public function __construct($title, $poster_image, $secondary_image, $realise_date, $description)
    {
        $this->title = $title;
        $this->poster_image = $poster_image;
        $this->secondary_image = $secondary_image;
        $this->realise_date = $realise_date;
        $this->description = $description;
    }

    /**
     * ### changePoster
     * Changes the poster image with a secondary image stored in the variable $secondary_image
     */
    public function changePoster()
    {
        $t = $this->poster_image;
        $this->poster_image = $this->secondary_image;
        $this->secondary_image = $t;
    }
};

$test = new Movie('title test', 'poster 1', 'poster 2', 'dd-mm-yyyy', 'this is a description');
var_dump($test);

$test->changePoster();
var_dump($test);
