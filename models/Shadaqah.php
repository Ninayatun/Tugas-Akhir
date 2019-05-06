<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shadaqah".
 *
 * @property int $id
 * @property string $tanggal
 * @property string $nama_pemberi
 * @property string $alamat_pemberi
 * @property int $jumlah_shadaqah
 */
class Shadaqah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shadaqah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'nama_pemberi', 'alamat_pemberi', 'jumlah_shadaqah'], 'required'],
            [['tanggal'], 'safe'],
            [['jumlah_shadaqah'], 'integer'],
            [['nama_pemberi', 'alamat_pemberi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tanggal' => 'Tanggal',
            'nama_pemberi' => 'Nama Pemberi',
            'alamat_pemberi' => 'Alamat Pemberi',
            'jumlah_shadaqah' => 'Jumlah Shadaqah',
        ];
    }
}
