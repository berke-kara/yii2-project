<?php

namespace berkekaraa\project\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use berkekaraa\project\models\Calisan;

/**
 * CalisanSearch represents the model behind the search form of `berkekaraa\project\models\Calisan`.
 */
class CalisanSearch extends Calisan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Yas'], 'integer'],
            [['isim', 'bolum'], 'safe'],
            [['Maas'], 'number'],
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
        $query = Calisan::find();

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
            'id' => $this->id,
            'Maas' => $this->Maas,
            'Yas' => $this->Yas,
        ]);

        $query->andFilterWhere(['like', 'isim', $this->isim])
            ->andFilterWhere(['like', 'bolum', $this->bolum]);

        return $dataProvider;
    }
}
