<div class="movies">
    <h2 class="py-2">Latest MCU's Movies</h2>
    <div class="row row-cols-2 row-cols-md-5">
        <?php foreach ($movies as $movie) : ?>
            <div class="col">
                <div class="card border-0">
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