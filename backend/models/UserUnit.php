<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "t_user_unit".
 *
 * @property integer $uu_id
 * @property integer $user_id
 * @property integer $unit_id
 *
 * @property TUnit $unit
 * @property User $user
 */
class UserUnit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_keluarga';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'kid'], 'required'],
            [['user_id', 'kid'], 'integer'],
            [['kid'], 'exist', 'skipOnError' => true, 'targetClass' => Keluarga::className(), 'targetAttribute' => ['kid' => 'kid']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uu_id' => 'Uu ID',
            'user_id' => 'User ID',
            'kid' => 'Keluarga ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKeluarga()
    {
        return $this->hasOne(Keluarga::className(), ['kid' => 'kid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
