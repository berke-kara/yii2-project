<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210102_160232_calisan
 */
class m210102_160232_calisan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('calisan',[
            'id' => Schema::TYPE_PK,
            'isim' => Schema::TYPE_STRING,
            'bolum' => Schema::TYPE_STRING,
            'Maas' => Schema::TYPE_FLOAT,
            'Yas' => Schema::TYPE_INTEGER,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210102_160232_calisan cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210102_160232_calisan cannot be reverted.\n";

        return false;
    }
    */
}
