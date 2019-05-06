<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "muzaki".
 *
 * @property int $id_muzaki
 * @property int $id_user
 * @property string $nama
 * @property string $alamat
 * @property string $no_telepon
 * @property string $email
 * @property string $foto
 */
class Muzaki extends \yii\db\ActiveRecord
{

    public static function getList()
    {
        return \yii\helpers\ArrayHelper::map(self::find()->all(), 'id_muzaki', 'nama');
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'muzaki';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'no_telepon', 'email', 'foto'], 'required'],
            [['nama', 'alamat', 'no_telepon', 'email', 'foto'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_muzaki' => 'Id Muzaki',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'no_telepon' => 'No Telepon',
            'email' => 'Email',
            'foto' => 'Foto',
        ];
    }
}
