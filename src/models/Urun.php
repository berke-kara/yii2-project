<?php


namespace berkekaraa\models;

use Yii;

/**
 * This is the model class for table "urun".
 *
 * @property int $id
 * @property string $isim
 * @property int $fiyat
 * @property int $kategori_id
 * @property string $resim
 *
 * @property UrunKategori $kategori
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
            [['isim', 'fiyat', 'kategori_id', 'resim'], 'required'],
            [['fiyat', 'kategori_id'], 'integer'],
            [['isim'], 'string', 'max' => 32],
            [['resim'], 'string', 'max' => 255],
            [['kategori_id'], 'exist', 'skipOnError' => true, 'targetClass' => UrunKategori::className(), 'targetAttribute' => ['kategori_id' => 'id']],
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
            'kategori_id' => 'Kategori ID',
            'resim' => 'Resim',
        ];
    }

    /**
     * Gets query for [[Kategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(UrunKategori::className(), ['id' => 'kategori_id']);
    }
}
