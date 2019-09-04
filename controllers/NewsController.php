<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Short_News;

class NewsController extends Controller
{

    public function actionIndex()
    {
        $modelShortNews = new Short_News();
        $shortNews = $modelShortNews::find()->all();


        return $this->render('news', [

            'shortNews' => $shortNews,

        ]);
    }

}
