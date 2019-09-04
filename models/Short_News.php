<?php

namespace app\models;

use Yii;


class Short_News extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'short_news';
    }

    public function rules()
    {
        return [
            [['heading', 'news_content'], 'string', 'max' => 255],
        ];
    }
}

