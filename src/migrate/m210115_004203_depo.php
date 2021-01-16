<?php

use yii\db\Migration;

/**
 * Class m210115_004203_depo
 */
class m210115_004203_depo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('depo',[
            'id'=> $this->primaryKey(),
            'isim'=> $this->string(32)->notNull(),
        ]);


        $this->batchInsert('depo',["isim"],[
            ["Sut ve Sut Urunleri"],
            ["Et ve Et Urunleri"],
            ["Temel Gida"],
            ["Sarküteri ve Kahvaltilik"],
            ["Meyve ve Sebze"],
            ["Atistirmalik Urunler"],
            ["İcecek"],
            ["Temizlik Urunleri"],
        ]);
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable('depo');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210115_004203_depo cannot be reverted.\n";

        return false;
    }
    */
}
