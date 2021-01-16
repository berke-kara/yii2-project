<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210115_013442_urun
 */
class m210115_021027_urun extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('urun',[
            'id' => Schema::TYPE_PK,
            'isim' => Schema::TYPE_STRING,
            'fiyat' => Schema::TYPE_FLOAT,
            'stok_adedi' => Schema::TYPE_INTEGER,
            'bulunduğu_depo_id' => Schema::TYPE_INTEGER,
        ]);
        $this->addForeignKey("fk_urun_cid", "urun", "bulunduğu_depo_id", "depo", "id", "RESTRICT", "CASCADE");

        $this->batchInsert('urun',["isim","fiyat","stok_adedi","bulunduğu_depo_id"],[
            ["Yogurt",5,2000,1],
            ["Peynir",10,500,1],
            ["Sut",4,1000,1],
            ["Tereyagi",50,2500,1],
            ["Et",85,5000,2],
            ["Balik",30,9000,2],
            ["Makarna",2,2000,3],
            ["Yag",70,850,3],
            ["Seker",4,5200,3],
            ["Recel",9,300,4],
            ["Zeytin",15,12000,4],
            ["Helva",14,440,4],
            ["Elma",3,16000,5],
            ["Portakal",2,50000,5],
            ["Nar",8,60000,5],
            ["Cikolata",5,12000,6],
            ["Cips",8,18000,6],
            ["Cekirdek",2,50,6],
            ["Biskuvi",3,4500,6],
            ["Meyve Su",10,2500,7],
            ["Cola",6,18000,7],
            ["Kahve",4,88000,7],
            ["Sahlep",12,1000,7],
            ["deterjan",25,1600,8],
            ["Sabun",7,2000,8],
            ["Sunger",4,8500,8],
        ]);
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210115_013442_urun cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210115_013442_urun cannot be reverted.\n";

        return false;
    }
    */
}
