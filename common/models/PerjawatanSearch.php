<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Perjawatan;

/**
 * PerjawatanSearch represents the model behind the search form of `common\models\Perjawatan`.
 */
class PerjawatanSearch extends Perjawatan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'profile', 'jawatan', 'bahagian'], 'integer'],
            [['tarikhMula', 'tarikhTamat', 'supervisor'], 'safe'],
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
        $query = Perjawatan::find();

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
            'profile' => $this->profile,
            'jawatan' => $this->jawatan,
            'bahagian' => $this->bahagian,
            'tarikhMula' => $this->tarikhMula,
            'tarikhTamat' => $this->tarikhTamat,
        ]);

        $query->andFilterWhere(['like', 'supervisor', $this->supervisor]);

        return $dataProvider;
    }
}
