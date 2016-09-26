<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Userdata;
use backend\models\User;

/**
 * UserdataInternalSearch represents the model behind the search form about `backend\models\UserdataInternal`.
 */
class UserdataSearch extends Userdata
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ui_id', 'user_id'], 'integer'],
            [['fullname', 'username', 'email'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    /*public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'email' => 'Email',
        ];
    }*/
    
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
		//die(var_dump($params));
        $query = Userdata::find();

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
        
        // Select All
		$query->select('*');
        
        // Join other table
		$query->leftJoin('user', 'id = user_id');
		
        // grid filtering conditions
        $query->andFilterWhere([
            'ui_id' => $this->ui_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'fullname', $this->fullname]);
		//die(var_dump($query));
        return $dataProvider;
    }
}
