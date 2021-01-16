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
 * @property int|null $bulunduğu_depo_id
 *
 * @property Satis[] $satis
 * @property Depo $bulunduğuDepo
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
            [['stok_adedi', 'bulunduğu_depo_id'], 'integer'],
            [['isim'], 'string', 'max' => 255],
            [['bulunduğu_depo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Depo::className(), 'targetAttribute' => ['bulunduğu_depo_id' => 'id']],
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
     * Gets query for [[Satis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatis()
    {
        return $this->hasMany(Satis::className(), ['urun_id' => 'id']);
    }

    /**
     * Gets query for [[BulunduğuDepo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBulunduğuDepo()
    {
        return $this->hasOne(Depo::className(), ['id' => 'bulunduğu_depo_id']);
    }
}
