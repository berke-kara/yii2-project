<?php

namespace berkekaraa\project\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use berkekaraa\project\models\Satis;

/**
 * SatisSearch represents the model behind the search form of `berkekaraa\project\models\Satis`.
 */
class SatisSearch extends Satis
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kullanici_tc', 'urun_id', 'stok_adedi'], 'integer'],
            [['market_isim', 'adres'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Satis::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'kullanici_tc' => $this->kullanici_tc,
            'urun_id' => $this->urun_id,
            'stok_adedi' => $this->stok_adedi,
        ]);

        $query->andFilterWhere(['like', 'market_isim', $this->market_isim])
            ->andFilterWhere(['like', 'adres', $this->adres]);

        return $dataProvider;
    }
}
