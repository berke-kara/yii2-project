<?php

namespace berkekaraa\project\models;

use Yii;

/**
 * This is the model class for table "satis".
 *
 * @property int $kullanici_tc
 * @property int $urun_id
 * @property int $stok_adedi
 * @property string $market_isim
 * @property string $adres
 *
 * @property Urun $urun
 */
class Satis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'satis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kullanici_tc', 'urun_id', 'stok_adedi', 'market_isim', 'adres'], 'required'],
            [['kullanici_tc', 'urun_id', 'stok_adedi'], 'integer'],
            [['adres'], 'string'],
            [['market_isim'], 'string', 'max' => 32],
            [['kullanici_tc'], 'unique'],
            [['urun_id'], 'exist', 'skipOnError' => true, 'targetClass' => Urun::className(), 'targetAttribute' => ['urun_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kullanici_tc' => 'Kullanici Tc',
            'urun_id' => 'Urun ID',
            'stok_adedi' => 'Stok Adedi',
            'market_isim' => 'Market Isim',
            'adres' => 'Adres',
        ];
    }

    /**
     * Gets query for [[Urun]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUrun()
    {
        return $this->hasOne(Urun::className(), ['id' => 'urun_id']);
    }
}
