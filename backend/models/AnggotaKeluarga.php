<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "anggota_keluarga".
 *
 * @property integer $aid
 * @property integer $kid
 * @property string $nama_lengkap
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $keluhan_sekarang
 * @property string $catatan_perkembangan
 *
 * @property Keluarga $k
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
            [['kid'], 'integer'],
            [['nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'keluhan_sekarang', 'catatan_perkembangan'], 'required'],
            [['nama_lengkap', 'tempat_lahir', 'keluhan_sekarang', 'catatan_perkembangan'], 'string'],
            [['tanggal_lahir'], 'safe'],
            [['kid'], 'exist', 'skipOnError' => true, 'targetClass' => Keluarga::className(), 'targetAttribute' => ['kid' => 'kid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'aid' => 'Aid',
            'kid' => 'Keluarga',
            'nama_lengkap' => 'Nama Lengkap',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'keluhan_sekarang' => 'Keluhan Sekarang',
            'catatan_perkembangan' => 'Catatan Perkembangan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getK()
    {
        return $this->hasOne(Keluarga::className(), ['kid' => 'kid']);
    }
}
