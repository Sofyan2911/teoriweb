<?php
use yii\widgets\DetailView;
?>

<?=
    DetailView::widget([
        'model' => $mahasiswa024,
        'attributes' => [
            'Id024',
            'Nim024',
            'Nama024',
            'Kelas024',
            'Status024',
        ],
    ]);
?>
