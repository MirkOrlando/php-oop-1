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
            box-shadow: 0px 10px 10px -2px grey;
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