<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Keluarga;

/**
 * KeluargaSearch represents the model behind the search form about `backend\models\Keluarga`.
 */
class KeluargaSearch extends Keluarga
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kid'], 'integer'],
            [['nama_keluarga'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Keluarga::find();

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
            'kid' => $this->kid,
        ]);

        $query->andFilterWhere(['like', 'nama_keluarga', $this->nama_keluarga]);

        return $dataProvider;
    }
}
