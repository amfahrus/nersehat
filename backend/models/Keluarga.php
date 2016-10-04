<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "keluarga".
 *
 * @property integer $kid
 * @property integer $uid
 * @property string $nama
 *
 * @property AnggotaKeluarga[] $anggotaKeluargas
 * @property User $u
 */
class Keluarga extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'keluarga';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid'], 'integer'],
            [['nama'], 'required'],
            [['nama'], 'string'],
            [['uid'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['uid' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kid' => 'Kid',
            'uid' => 'Uid',
            'nama' => 'Nama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnggotaKeluargas()
    {
        return $this->hasMany(AnggotaKeluarga::className(), ['kid' => 'kid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getU()
    {
        return $this->hasOne(User::className(), ['id' => 'uid']);
    }
}
