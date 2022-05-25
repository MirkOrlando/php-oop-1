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

$movies = [
    new Movie("Ant-Man and the Wasp: Quantumania", "https://www.themoviedb.org/t/p/original/mYCBuVGQGWPlUNZQusdHfbSzP1h.jpg", "https://www.themoviedb.org/t/p/original/rizh9m7xkVqMsOZeGmLLPoZZYZC.jpg", "17/02/2023", "The third film in the Marvel Studios' Ant-Man trilogy"),
    new Movie("Thor: Love and Thunder", "https://www.themoviedb.org/t/p/original/4zLfBbGnuUBLbMVtagTZvzFwS8l.jpg", "https://www.themoviedb.org/t/p/original/cOkx3uu5FVgC902Q6Y3MxLpBWbX.jpg", "07/06/2022", "After his retirement is interrupted by a galactic killer who seeks the extinction of the gods, Thor enlists the help of King Valkyrie, Korg, and ex-girlfriend Jane Foster, who now inexplicably wields Mjolnir as the Mighty Thor. Together, they embark upon a harrowing cosmic adventure to uncover the mystery of the God Butcher’s vengeance and stop him before it’s too late."),
    new Movie("Doctor Strange in the Multiverse of Madness", "https://www.themoviedb.org/t/p/original/9Gtg2DzBhmYamXBS1hKAhiwbBKS.jpg", "https://www.themoviedb.org/t/p/original/3EhxHFQIZygJT1l4KFpVJ7GIcsg.jpg", "04/05/2022", "Doctor Strange, with the help of mystical allies both old and new, traverses the mind-bending and dangerous alternate realities of the Multiverse to confront a mysterious new adversary."),
    new Movie("Spider-Man: No Way Home", "https://www.themoviedb.org/t/p/original/1g0dhYtq4irTY1GPXvft6k4YLjm.jpg", "https://www.themoviedb.org/t/p/original/tomAFJjfSCpsufKh1oYcoLmNjT9.jpg", "15/12/2021", "Peter Parker is unmasked and no longer able to separate his normal life from the high-stakes of being a super-hero. When he asks for help from Doctor Strange the stakes become even more dangerous, forcing him to discover what it truly means to be Spider-Man."),
    new Movie("Eternals", "https://www.themoviedb.org/t/p/original/bcCBq9N1EMo3daNIjWJ8kYvrQm6.jpg", "https://www.themoviedb.org/t/p/original/sek1J4uqAh1vcJF5PM08A1QuNsn.jpg", "03/11/2021", "The Eternals are a team of ancient aliens who have been living on Earth in secret for thousands of years. When an unexpected tragedy forces them out of the shadows, they are forced to reunite against mankind’s most ancient enemy, the Deviants."),
];

var_dump($movies);
