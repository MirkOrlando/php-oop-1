<?php

require_once __DIR__ . "/Models/Movies.php";
require_once __DIR__ . "/db.php";
require_once __DIR__ . "/partials/head.php";
require_once __DIR__ . "/partials/header.php";
?>

<main>
    <?php require_once __DIR__ . "/partials/jumbo_movies.php" ?>

    <div class="container py-3">
        <?php require_once __DIR__ . "/partials/movies.php" ?>
    </div>
</main>

<?php require_once __DIR__ . "/partials/footer.php" ?>