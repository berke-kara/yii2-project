<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210102_164023_depo
 */
class m210102_164023_depo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('depo',[
            'id' => Schema::TYPE_PK,
            'isim' => Schema::TYPE_STRING,
            'depo_sorumlusu_id' => Schema::TYPE_INTEGER,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210102_164023_depo cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210102_164023_depo cannot be reverted.\n";

        return false;
    }
    */
}
