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

//var_dump($movies);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-opp-1</title>
    <!-- Bootstrap CSS v5.1.3 -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <style>
        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        header {
            padding: 0.5rem;
            position: sticky;
            top: 0;
        }

        header .logo {
            width: 50px;
        }

        .card-img-top {
            box-shadow: 0px 10px 10px -3px grey;
            transition: all 250ms linear;
        }

        .card-title {
            transition: all 250ms linear;
        }

        .card:hover .card-img-top {
            transform: translate(0, -5px);
        }

        .card:hover .card-title {
            color: #ff0000;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <img class="img-fluid" src="https://tous-logos.com/wp-content/uploads/2018/07/Symbole-Marvel.jpg" alt="">
        </div>
    </header>
    <main>
        <div class="p-5 bg-dark text-white">
            <div class="container">
                <h1 class="display-3 text-danger">Marvel Cinematic Universe</h1>
                <p class="lead">Following the latest MCU's movies</p>
                <hr class="my-2">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore ea libero est aliquid sapiente ducimus cupiditate nemo id, consectetur placeat voluptatibus vitae hic delectus commodi ad impedit. Et, maxime hic?</p>
            </div>
        </div>
        <div class="movies py-3">
            <h2>Latest MCU's Movies</h2>
            <div class="container">
                <div class="row row-cols-2 row-cols-md-5">
                    <?php foreach ($movies as $movie) : ?>
                        <div class="col">
                            <div class="card h-100 border-0">
                                <img class="card-img-top" src="<?= $movie->poster_image ?>" alt="image <?= $movie->title ?>">
                                <div class="card-body">
                                    <h6 class="card-title"><?= $movie->title ?></h6>
                                    <p class="card-text text-secondary"><?= $movie->realise_date ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </main>
    <footer class="text-center">
        Copyright &copy;2022
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js' integrity='sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
</body>

</html>