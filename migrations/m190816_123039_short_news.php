<?php

use yii\db\Migration;

class m190816_123039_short_news extends Migration
{
    public function safeUp()
    {
        $this->execute("DROP TABLE IF EXISTS `short_news`");

        $this->createTable('short_news', [
            'id' => $this->primaryKey(),
            'heading' => $this->char(255)->notNull(),
            'news_content' => $this->char(255)->notNull(),
        ], 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB');
    }

    public function safeDown()
    {
        $this->dropTable('short_news');
    }
}
