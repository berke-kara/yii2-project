<?php

namespace berkekaraa\project\models;

use Yii;

/**
 * This is the model class for table "calisan".
 *
 * @property int $id
 * @property string|null $isim
 * @property string|null $bolum
 * @property float|null $Maas
 * @property int|null $Yas
 */
class Calisan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'calisan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Maas'], 'number'],
            [['Yas'], 'integer'],
            [['isim', 'bolum'], 'string', 'max' => 255],
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
            'bolum' => 'Bolum',
            'Maas' => 'Maas',
            'Yas' => 'Yas',
        ];
    }
}
