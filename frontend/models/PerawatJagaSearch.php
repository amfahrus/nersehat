<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Perawat;

/**
 * PerawatSearch represents the model behind the search form about `frontend\models\Perawat`.
 */
class PerawatJagaSearch extends Perawat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid'], 'integer'],
            [['id_perawat', 'nama_perawat', 'nomor_hp', 'layanan', 'agama', 'jenis_kelamin', 'penempatan'], 'safe'],
            [['jaga_hari_ini'], 'boolean'],
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
        $query = Perawat::find()->where(['=','jaga_hari_ini',true]);

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
            'pid' => $this->pid,
            'jaga_hari_ini' => $this->jaga_hari_ini,
        ]);

        $query->andFilterWhere(['like', 'id_perawat', $this->id_perawat])
            ->andFilterWhere(['like', 'nama_perawat', $this->nama_perawat])
            ->andFilterWhere(['like', 'nomor_hp', $this->nomor_hp])
            ->andFilterWhere(['like', 'layanan', $this->layanan])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'penempatan', $this->penempatan]);

        return $dataProvider;
    }
}
