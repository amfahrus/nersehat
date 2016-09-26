<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user_keluarga".
 *
 * @property integer $uu_id
 * @property integer $user_id
 * @property integer $kid
 *
 * @property Keluarga $k
 * @property User $user
 */
class UserKeluarga extends \yii\db\ActiveRecord
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
            'kid' => 'Kid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getK()
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
