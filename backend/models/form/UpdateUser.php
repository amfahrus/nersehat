<?php

namespace backend\models\form;

use Yii;
use yii\rbac\Item;
use yii\helpers\Json;
use yii\base\Model;
use backend\models\User;
use backend\models\Userdata;
use backend\models\Agen;

/**
 * This is the model class for table "tbl_auth_item".
 *
 * @property string $name
 * @property integer $type
 * @property string $description
 * @property string $ruleName
 * @property string $data
 */
class UpdateUser extends Model
{
    public $username;
    public $email;
    /**
     * @var Item
     */
    
    /**
     * Get User
     * @return array
     */
    public function getUserId($id)
    {
        $query = User::find()
			->select('username,email,userdata.*')
			->leftJoin('userdata', 'id = userdata.user_id')
			->where(['userdata.ui_id' => $id])
			//->asArray()
			->one();
		//die(var_dump($query));
        
		return $query;
    }
    
    public function getAgenId($id)
    {
        $query = User::find()
            ->select('username,email,p_agen.*')
            ->leftJoin('p_agen', 'id = p_agen.user_id')
            ->where(['p_agen.agen_id' => $id])
            //->asArray()
            ->one();
        //die(var_dump($query));
        
        return $query;
    }
}
