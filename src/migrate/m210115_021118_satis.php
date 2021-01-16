<?php

use yii\db\Migration;

/**
 * Class m210115_013032_satis
 */
class m210115_021118_satis extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('satis', [
            'kullanici_tc' =>'int NOT NULL',
            'urun_id' =>'int NOT NULL',
            'stok_adedi' =>'int NOT NULL',
            'market_isim' =>$this->string(32)->notNull(),
            'adres' =>$this->text()->notNull(),
            'PRIMARY KEY (kullanici_tc)'
        ]);


        $this->addForeignKey("fk_satis_cid", "satis", "urun_id", "urun", "id", "RESTRICT", "CASCADE");

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable('satis');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210115_013032_satis cannot be reverted.\n";

        return false;
    }
    */
}
