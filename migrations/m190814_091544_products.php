<?php

use yii\db\Migration;

class m190814_091544_products extends Migration
{

    public function safeUp()
    {
        $this->execute("DROP TABLE IF EXISTS `products`");

        $this->createTable('products', [
            'id' => $this->primaryKey(),
            'name' => $this->text(),
            'price' => $this->char(255),
            'description' => $this->text(),
            'img_url' => $this->char(255),
        ], 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB');
    }

    public function safeDown()
    {
        $this->dropTable('products');
    }

}
