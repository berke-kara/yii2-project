<?php

namespace berkekaraa\project\models;

use Yii;

/**
 * This is the model class for table "depo".
 *
 * @property int $id
 * @property string|null $isim
 * @property int|null $depo_sorumlusu_id
 *
 * @property Urun $urun
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
            [['id'], 'required'],
            [['id', 'depo_sorumlusu_id'], 'integer'],
            [['isim'], 'string', 'max' => 255],
            [['id'], 'unique'],
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
            'depo_sorumlusu_id' => 'Depo Sorumlusu ID',
        ];
    }

    /**
     * Gets query for [[Urun]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUrun()
    {
        return $this->hasOne(Urun::className(), ['id' => 'id']);
    }
}
