<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa024".
 *
 * @property int $Id024
 * @property string $Nim024
 * @property string $Nama024
 * @property string $Kelas024
 * @property string $Status024
 */
class Mahasiswa024 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa024';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nim024', 'Nama024', 'Kelas024', 'Status024'], 'required'],
            [['Nim024', 'Nama024', 'Kelas024', 'Status024'], 'string', 'max' => 80],
            [['Nim024'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id024' => 'Id024',
            'Nim024' => 'Nim024',
            'Nama024' => 'Nama024',
            'Kelas024' => 'Kelas024',
            'Status024' => 'Status024',
        ];
    }
}
