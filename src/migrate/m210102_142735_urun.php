<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210102_142735_urun
 */
class m210102_142735_urun extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('urun2', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'body' => Schema::TYPE_TEXT,
            'created_at' => Schema::TYPE_DATETIME,
            'updated_at' => Schema::TYPE_DATETIME,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {


        return $this->dropTable('urun2');
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210102_142735_urun cannot be reverted.\n";

        return false;
    }
    */
}
