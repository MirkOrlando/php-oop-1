<?php

/* create class Movie */
class Movie
{
    /* initiate instance variables */
    public $title;
    public $image;
    public $realise_date;
    public $description;

    /* define constructor */
    public function __construct($title, $image, $realise_date, $description)
    {
        $this->title = $title;
        $this->image = $image;
        $this->realise_date = $realise_date;
        $this->description = $description;
    }
};
