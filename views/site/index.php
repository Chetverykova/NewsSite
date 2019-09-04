<?php

use app\models\Products;
use app\models\Short_News;
use yii\data\Pagination;
use yii\widgets\LinkPager;

/** @var $this yii\web\View
 * @var $pages Pagination
 * @var $models Products[]
 * @var $news Short_News
 */

$this->title = 'News Application';

?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>Album example · Bootstrap</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">

        <!-- Bootstrap core CSS -->
        <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <!-- Custom styles for this template -->
        <link href="album.css" rel="stylesheet">
    </head>
    <body>
    <main role="main">
    <div class="site-index row">

        <div class="sidebar col-md-4">
            <section id="sidebar"><section id="intro">
                    <header>
                        <h2><a href="/news/web/index.php" class="logo">Top Stories</a></h2>
                    </header>
                <section>
                    <div class="mini-posts">
                        <?php foreach ($news['articles'] as $bbcNews):?>
                        <!-- Mini Post -->
                        <article class="mini-post">
                            <a href="<?=$bbcNews["url"]?>" class="image"><img src="<?=$bbcNews['urlToImage']?>" alt=""></a>
                            <header>
                                <h3><a href="single.html"><?=$bbcNews['title']?></a></h3>
                                <p align="justify"><?=$bbcNews["description"]?></p>
                            </header>
                        </article>
                        <?php endforeach;?>
                    </div>
                </section>
            </section>
        </div>

        <div class="container col-md=2">
            <div class="card mb-4 shadow-sm" align="right">
                <?php foreach ($models as $product): ?>
                <img class="product-picture" height="225" width="150" src="<?= $product->img_url; ?>" alt=""><hr>
                    <h3><?= $product->name; ?></h3><hr>
                    <p class="card-text" align="justify"><?= $product->description; ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Add to cart for <?= $product->price; ?>$</button>
                        </div>
                        <br>
                        <br>
                        <hr>
                        <?php endforeach;?>
                    </div>
                </div>

            </div>

        </div>

    </main>
    </body>

    <footer class="text-muted">
        <div class="container">
            <?php echo LinkPager::widget(['pagination' => $pages]); ?>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
    </html>



