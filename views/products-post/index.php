<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\Pagination;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name:ntext',
            'price',
            'description:ntext',
            'img_url:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);?>

    <div class="row products">
        <div class="col-md-4">
            <h2>Product title</h2>

            <button class="product-price">Add to cart for 99$</button>

            <a class="product-link" href="/product-page"><img class="product-picture" src="images/pic05.jpg" alt=""></a>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur.</p>
        </div>
    </div>

</div>
