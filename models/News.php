<?php


namespace app\models;


use yii\base\BaseObject;

class News extends BaseObject
{
    public $apiKey = '';

    public $url = '';

    public function getNews()
    {
        $contents = $this->getData();
        $news = json_decode($contents, true);
        return $news;
    }

    /**
     * @return bool|string
     */
    protected function getData()
    {
        $ch = curl_init($this->url . $this->apiKey);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $contents = curl_exec($ch);
        curl_close($ch);
        return $contents;
    }
}