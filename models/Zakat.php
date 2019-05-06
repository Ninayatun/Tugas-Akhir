<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zakat".
 *
 * @property int $id
 * @property string $tanggal
 * @property int $id_muzaki
 * @property int $id_jenis_zakat
 * @property int $nominal
 * @property string $status
 */
class Zakat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'zakat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'id_muzaki', 'id_jenis_zakat', 'nominal', 'status'], 'required'],
            [['tanggal'], 'safe'],
            [['id_muzaki', 'id_jenis_zakat', 'nominal'], 'integer'],
            [['status'], 'string', 'max' => 255],
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
            'id_muzaki' => 'Nama Muzaki',
            'id_jenis_zakat' => 'Jenis Zakat',
            'nominal' => 'Nominal',
            'status' => 'Status',
        ];
    }
}
