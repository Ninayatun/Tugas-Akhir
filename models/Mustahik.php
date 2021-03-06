<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mustahik".
 *
 * @property int $id_mustahik
 * @property int $id_user
 * @property int $id_jenis_mustahik
 * @property string $nama
 * @property string $alamat
 */
class Mustahik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mustahik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jenis_mustahik', 'nama', 'alamat'], 'required'],
            [['id_jenis_mustahik'], 'integer'],
            [['nama', 'alamat'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_mustahik' => 'Id Mustahik',
            'id_jenis_mustahik' => 'Id Jenis Mustahik',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
        ];
    }
}
