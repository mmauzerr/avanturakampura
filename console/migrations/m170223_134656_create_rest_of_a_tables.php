<?php

use yii\db\Migration;

class m170223_134656_create_rest_of_a_tables extends Migration
{
    public function up()
    {
        $this->createTable('utisci', [
            'id' => $this->primaryKey(),
            'img' => $this->string(),
        ]);

        $this->createTable('aktivnosti', [
            'id' => $this->primaryKey(),
            'content' => $this->text(),
            'img' => $this->string(),
        ]);

        $this->createTable('dnevni_raspored', [
            'id' => $this->primaryKey(),
            'content' => $this->text(),

        ]);

        $this->createTable('smestaj', [
            'id' => $this->primaryKey(),
            'content' => $this->text(),
            'img' => $this->string(),
        ]);

        $this->createTable('transport', [
            'id' => $this->primaryKey(),
            'content' => $this->text(),
            'img' => $this->string(),
        ]);

        $this->createTable('lokacija', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'content' => $this->text(),
            'img' => $this->string(),
        ]);

        $this->createTable('sta_poneti', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'content' => $this->text(),
        ]);

        $this->createTable('cene', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'content' => $this->text(),
        ]);


    }

    public function down()
    {
        $this->dropTable('utisci');
        $this->dropTable('aktivnosti');
        $this->dropTable('dnevni_raspored');
        $this->dropTable('smestaj');
        $this->dropTable('transport');
        $this->dropTable('lokacija');
        $this->dropTable('sta_poneti');
        $this->dropTable('cene');

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
