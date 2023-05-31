<?php

    use yii\grid\GridView;
    use yii\grid\SerialColumn;
    use yii\grid\ActionColumn;
    use yii\helpers\Html;

?>

<?=
    Html::a('Tambah Mahasiswa ', ['create'], ['class' => 'btn btn-primary']);

?>
<?= 
    GridView::widget([

        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => SerialColumn::className()],
            'Id024',
            'Nim024',
            'Nama024',
            'Kelas024',
            'Status024',
            
            ['class' => ActionColumn::className()],
        ]
    ]);
?>
