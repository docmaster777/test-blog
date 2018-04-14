<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m170627_081920_create_post_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'content' => $this->text(),
            'like' => $this->integer(),
            'date' => $this->date(),
            'image' => $this->string(),
            'status' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('post');
    }
}
