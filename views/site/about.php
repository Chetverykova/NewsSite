<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about row">

    <div class="sidebar col-md-4">
        <section id="sidebar"><section id="intro">
                <header>
                    <h2><a href="/news/web/index.php" class="logo">My Application</a></h2>
                </header>

                <!-- Intro -->


                <!-- Mini Posts -->
                <section>
                    <div class="mini-posts">

                        <!-- Mini Post -->
                        <article class="mini-post">
                            <a href="single.html" class="image"><img src="images/pic04.jpg" alt=""></a>
                            <header>
                                <h3><a href="single.html">Vitae sed condimentum</a></h3>
                                <p>October 20, 2015</p>
                            </header>
                        </article>

                        <!-- Mini Post -->
                        <article class="mini-post">
                            <a href="single.html" class="image"><img src="images/pic05.jpg" alt=""></a>
                            <header>
                                <h3><a href="single.html">Rutrum neque accumsan</a></h3>
                                <p>October 19, 2015</p>
                            </header>
                        </article>


                    </div>
                </section>

            </section>
    </div>

    <div class="body-content col-md-8">

        <div class="product">
            <div class="col">
                <h2>Product title</h2>

                <img class="product-picture" src="images/pic05.jpg" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
            </div>
        </div>

    </div>
</div>
