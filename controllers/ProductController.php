<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Product;

class ProductController extends Controller
{
    public function actionView($id)
    {
        $model = new Product();
        $product = $model->getProductById($id);
        return $this->render('view', ['product' => $product]);
    }
}
