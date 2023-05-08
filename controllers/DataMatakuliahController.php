<?php

namespace app\controllers;

class DataMatakuliahController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionRiwayatKrs()
    {
        return $this->render('riwayat krs');
    }

}
