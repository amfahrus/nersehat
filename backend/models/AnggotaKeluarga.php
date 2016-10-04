<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "anggota_keluarga".
 *
 * @property integer $aid
 * @property integer $uid
 * @property string $nama_lengkap
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $keluhan_sekarang
 * @property string $catatan_perkembangan
 * @property integer $kid
 *
 * @property Keluarga $k
 * @property User $u
 */
class AnggotaKeluarga extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anggota_keluarga';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'kid'], 'integer'],
            [['nama_lengkap', 'tempat_lahir', 'tanggal_lahir'], 'required'],
            [['nama_lengkap', 'tempat_lahir', 'keluhan_sekarang', 'catatan_perkembangan'], 'string'],
            [['tanggal_lahir'], 'safe'],
            [['kid'], 'exist', 'skipOnError' => true, 'targetClass' => Keluarga::className(), 'targetAttribute' => ['kid' => 'kid']],
            [['uid'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['uid' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'aid' => 'Aid',
            'uid' => 'Uid',
            'nama_lengkap' => 'Nama Lengkap',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'keluhan_sekarang' => 'Keluhan Sekarang',
            'catatan_perkembangan' => 'Catatan Perkembangan',
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
    public function getU()
    {
        return $this->hasOne(User::className(), ['id' => 'uid']);
    }
}
