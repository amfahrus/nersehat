<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "homecare".
 *
 * @property integer $hid
 * @property string $tanggal
 * @property string $jam
 * @property double $longitude
 * @property double $latitude
 * @property string $jenis_perawatan
 * @property string $klinik
 * @property string $rumah_sakit
 */
class Homecare extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'homecare';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tanggal', 'jam', 'jenis_perawatan'], 'required'],
            [['tanggal'], 'safe'],
            [['jam', 'jenis_perawatan', 'klinik', 'rumah_sakit'], 'string'],
            [['longitude', 'latitude'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hid' => 'Hid',
            'tanggal' => 'Tanggal',
            'jam' => 'Jam',
            'longitude' => 'Longitude',
            'latitude' => 'Latitude',
            'jenis_perawatan' => 'Jenis Perawatan',
            'klinik' => 'Klinik',
            'rumah_sakit' => 'Rumah Sakit',
        ];
    }
}
