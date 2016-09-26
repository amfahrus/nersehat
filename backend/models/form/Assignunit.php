<?php

namespace backend\models\form;

use Yii;
use yii\rbac\Item;
use yii\helpers\Json;
use yii\base\Model;
use backend\models\Keluarga;
use backend\models\UserUnit;
use mdm\admin\components\Helper;

/**
 * This is the model class for table "tbl_auth_item".
 *
 * @property string $name
 * @property integer $type
 * @property string $description
 * @property string $ruleName
 * @property string $data
 *
 */
class Assignunit extends Model
{
    public $unit_name;
    public $kid;
    public $user_id;
    /**
     * @var Item
     */
    
    /**
     * Get items
     * @return array
     */
    public function getItems($id)
    {
		$unit = Keluarga::find()
			->indexBy('nama_keluarga')
			->all();
        $avaliable = [];
		foreach ($unit as $row) {
                //$avaliable[$row['unit_id']] = $row['unit_name'];
                //$avaliable[$row['unit_name']] = 'unit';
                $avaliable['unit'][$row['kid']] = $row['nama_keluarga'];
            }
		//die(print_r($avaliable));
        $assigned = [];
        $userunits = Keluarga::find()
			->select('keluarga.kid,keluarga.nama_keluarga')
			->leftJoin('user_keluarga', 'keluarga.kid = user_keluarga.kid')
			->where(['user_keluarga.user_id' => $id])
			//->with('orders')
			->all();
		//die(print_r($userunits));
		foreach ($userunits as $rows) {
                //$assigned[$rows['unit_id']] = $rows['unit_name'];
                $assigned['unit'][$rows['kid']] = $rows['nama_keluarga'];
				//unset($avaliable[$rows['unit_id']]);
				unset($avaliable['unit'][$rows['kid']]);
                //$avaliable[$row['unit_name']] = 'unit';
                //$avaliable['unit'][$row['unit_id']] = $row['unit_name'];
            }	
            
		//die(print_r($assigned));
        //unset($avaliable[$this->unit_id]);
        return[
            'avaliable' => $avaliable,
            'assigned' => $assigned
        ];
    }
    
    /**
     * Adds an item as a child of another item.
     * @param array $items
     * @return int
     */
    public function addChildren($id,$items)
    {
		//die(print_r($items));
        $i = 0;
        // assign unit
		/*foreach($items as $row){
			$userunit = new UserUnit();
			$userunit->user_id = $id;
			$userunit->unit_id = $row[$i];
			$userunit->save();
            $i++;
		}*/
		
		$manager = Yii::$app->getAuthManager();
        foreach ($items as $name) {
            try {
				$item = $manager->getRole($name);
				$item = $item ? : $manager->getPermission($name);
				if($item){
					$manager->assign($item, $id);
				} else {
					$userunit = new UserUnit();
					$userunit->user_id = $id;
					$userunit->kid = $name[$i];
					$userunit->save();
				}
				$i++;
            } catch (\Exception $exc) {
                Yii::error($exc->getMessage(), __METHOD__);
            }
        }
        Helper::invalidate();
        return $i;
    }
    
    public function removeChildren($id,$items)
    {
		//die(print_r($items));
        $i = 0;
        //remove assigned unit
		/*foreach($items as $row){
			UserUnit::deleteAll('user_id = '.$id.' AND unit_id = '.$row[$i]);
            $i++;
		}*/
		
		$manager = Yii::$app->getAuthManager();
        foreach ($items as $name) {
            try {
				$item = $manager->getRole($name);
				$item = $item ? : $manager->getPermission($name);
				if($item){
					$manager->revoke($item, $id);
				} else {
					UserUnit::deleteAll('user_id = '.$id.' AND kid = '.$name[$i]);
				}
                $i++;
            } catch (\Exception $exc) {
                Yii::error($exc->getMessage(), __METHOD__);
            }
        }
        Helper::invalidate();
        return $i;
    }
}
