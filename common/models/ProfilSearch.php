<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Profil;

/**
 * ProfilSearch represents the model behind the search form of `common\models\Profil`.
 */
class ProfilSearch extends Profil
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nama', 'telefon', 'emel'], 'integer'],
            [['tarikhLahir'], 'safe'],
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
        $query = Profil::find();

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
            'nama' => $this->nama,
            'tarikhLahir' => $this->tarikhLahir,
            'telefon' => $this->telefon,
            'emel' => $this->emel,
        ]);

        return $dataProvider;
    }
}
