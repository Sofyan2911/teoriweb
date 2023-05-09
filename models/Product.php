<?php

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName()
    {
        return 'product';
    }

    public function getProductById($id)
    {
        return $this->find()->where(['id' => $id])->one();
    }
}