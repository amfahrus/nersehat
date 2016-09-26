<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "keluarga".
 *
 * @property integer $kid
 * @property string $nama_keluarga
 * @property integer $user_id
 *
 * @property AnggotaKeluarga[] $anggotaKeluargas
 * @property User $user
 * @property UserKeluarga[] $userKeluargas
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
            [['nama_keluarga'], 'required'],
            [['nama_keluarga'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kid' => 'Kid',
            'nama_keluarga' => 'Nama Keluarga',
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
    public function getUserKeluargas()
    {
        return $this->hasMany(UserKeluarga::className(), ['kid' => 'kid']);
    }
}
