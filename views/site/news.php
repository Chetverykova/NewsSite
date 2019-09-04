<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">

            <div class="col-md-4">
                <?php foreach ($shortNews as $shortNews):?>

                <h3><?= $shortNews->heading; ?></h3>
                <hr/>
                <p><?= $shortNews->news_content; ?></p>
                <hr/>
                <p><a class="btn btn-default" href="https://www.bbc.com/news">Read More</a></p>
            </div>
            <div class="col-md-4">
                <?php endforeach;?>

            </div>

        </div>

    </div>
</div>
