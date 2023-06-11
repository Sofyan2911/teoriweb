<?php

namespace app\controllers;

use app\models\Mahasiswa024;
use yii\data\ActiveDataProvider;
use Yii;

class Mahasiswa024Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa024::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
       
    }
    public function actionCreate()
    {
        $mahasiswa024 = new Mahasiswa024;
       // $mahasiswa024->id = '1';
        $mahasiswa024->Nim024 = '60200121024'.'-'.rand(100,999);
        $mahasiswa024->Nama024 = 'sofyan';
        $mahasiswa024->Kelas024 = 'D';
        $mahasiswa024->Status024 = 'baru';
        if ($mahasiswa024->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
       

    }

    public function actionUpdate($id)
    {
        $mahasiswa024 = Mahasiswa024::findOne(['Id024' => $id]);
        if ($mahasiswa024 !== null) {
            $mahasiswa024->Kelas024 = 'D';
            $mahasiswa024->Status024 = 'Update';
            $mahasiswa024->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
            return $this->redirect(['index']);
            
    }
       
      
   
    public function actionDelete($id)
    {
        $mahasiswa024 = Mahasiswa024::findOne(['Id024' => $id]);
        if ($mahasiswa024->delete())
        Yii::$app->session->setFlash('success', 'Data Terdelete');
         {
            return $this->redirect(['index']);
        }
    }

    public function actionView($id)
    {
        $mahasiswa024 = Mahasiswa024::findOne($id);
        //if($mahasiswa024 === null)
        return $this->render('view', ['mahasiswa024'=>$mahasiswa024]);
    }
}

