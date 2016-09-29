<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "artikel".
 *
 * @property integer $id_artikel
 * @property integer $jenis
 * @property string $gambar
 * @property string $judul
 * @property string $keterangan
 * @property string $tanggal
 */
class Artikel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'artikel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenis', 'judul', 'keterangan'], 'required'],
            [['jenis'], 'integer'],
            [['gambar', 'judul', 'keterangan'], 'string'],
            [['tanggal'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_artikel' => 'Id Artikel',
            'jenis' => 'Jenis',
            'gambar' => 'Gambar',
            'judul' => 'Judul',
            'keterangan' => 'Keterangan',
            'tanggal' => 'Tanggal',
        ];
    }
}
