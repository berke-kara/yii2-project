<?php

namespace berkekaraa\project\models;

use Yii;

/**
 * This is the model class for table "depo".
 *
 * @property int $id
 * @property string $isim
 */
class Depo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'depo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isim'], 'required'],
            [['isim'], 'string', 'max' => 32],
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
        ];
    }
}
