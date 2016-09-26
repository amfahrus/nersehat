<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "perawat".
 *
 * @property integer $pid
 * @property string $id_perawat
 * @property string $nama_perawat
 */
class Perawat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perawat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_perawat', 'nama_perawat'], 'required'],
            [['id_perawat', 'nama_perawat'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pid' => 'Pid',
            'id_perawat' => 'Id Perawat',
            'nama_perawat' => 'Nama Perawat',
        ];
    }
}
