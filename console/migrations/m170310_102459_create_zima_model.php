<?php

use yii\db\Migration;

class m170310_102459_create_zima_model extends Migration
{
    public function up()
    {
        $this->createTable('zima', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'content' => $this->text(),
            'img' => $this->string(),
        ]);
    }

    public function down()
    {
        $this->dropTable('zima');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
