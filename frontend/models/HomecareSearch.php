<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Homecare;

/**
 * HomecareSearch represents the model behind the search form about `frontend\models\Homecare`.
 */
class HomecareSearch extends Homecare
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hid'], 'integer'],
            [['tanggal', 'jam', 'jenis_perawatan', 'klinik', 'rumah_sakit'], 'safe'],
            [['longitude', 'latitude'], 'number'],
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
        $query = Homecare::find();

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
            'hid' => $this->hid,
            'tanggal' => $this->tanggal,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
        ]);

        $query->andFilterWhere(['like', 'jam', $this->jam])
            ->andFilterWhere(['like', 'jenis_perawatan', $this->jenis_perawatan])
            ->andFilterWhere(['like', 'klinik', $this->klinik])
            ->andFilterWhere(['like', 'rumah_sakit', $this->rumah_sakit]);

        return $dataProvider;
    }
}
