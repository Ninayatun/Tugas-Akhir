<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenis_zakat".
 *
 * @property int $id_jenis_zakat
 * @property string $nama
 */
class JenisZakat extends \yii\db\ActiveRecord
{

    public static function getList()
    {
        return \yii\helpers\ArrayHelper::map(self::find()->all(), 'id_jenis_zakat', 'nama');
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_zakat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jenis_zakat' => 'Id Jenis Zakat',
            'nama' => 'Nama',
        ];
    }
}
