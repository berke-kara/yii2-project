<?php

namespace berkekaraa\project\models;

use Yii;

/**
 * This is the model class for table "urun".
 *
 * @property int $id
 * @property string|null $isim
 * @property float|null $fiyat
 * @property int|null $stok_adedi
 * @property string|null $bulunduğu_depo_id
 *
 * @property Depo $id0
 */
class Urun extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'urun';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fiyat'], 'number'],
            [['stok_adedi'], 'integer'],
            [['isim', 'bulunduğu_depo_id'], 'string', 'max' => 255],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Depo::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isim' => 'Isim',
            'fiyat' => 'Fiyat',
            'stok_adedi' => 'Stok Adedi',
            'bulunduğu_depo_id' => 'Bulunduğu Depo ID',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Depo::className(), ['id' => 'id']);
    }
}
