<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210102_152943_urun
 */
class m210102_152943_urun extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('urun',[
            'id' => Schema::TYPE_PK,
            'isim' => Schema::TYPE_STRING,
            'fiyat' => Schema::TYPE_FLOAT,
            'stok_adedi' => Schema::TYPE_INTEGER,
            'bulunduğu_depo_id' => Schema::TYPE_INTEGER,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210102_152943_urun cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210102_152943_urun cannot be reverted.\n";

        return false;
    }
    */
}
