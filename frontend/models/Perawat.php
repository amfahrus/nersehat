<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "perawat".
 *
 * @property integer $pid
 * @property string $id_perawat
 * @property string $nama_perawat
 * @property string $nomor_hp
 * @property string $layanan
 * @property string $agama
 * @property string $jenis_kelamin
 * @property string $penempatan
 * @property boolean $jaga_hari_ini
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
            [['id_perawat', 'nama_perawat', 'nomor_hp', 'layanan', 'agama', 'jenis_kelamin', 'penempatan'], 'required'],
            [['id_perawat', 'nama_perawat', 'nomor_hp', 'layanan', 'agama', 'jenis_kelamin', 'penempatan'], 'string'],
            [['jaga_hari_ini'], 'boolean'],
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
            'nomor_hp' => 'Nomor Hp',
            'layanan' => 'Layanan',
            'agama' => 'Agama',
            'jenis_kelamin' => 'Jenis Kelamin',
            'penempatan' => 'Hari',
            'jaga_hari_ini' => 'Jaga Hari Ini',
        ];
    }
}
