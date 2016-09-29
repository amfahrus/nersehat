<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\KeperawatanAnakSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Artikels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="artikel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'gambar',
            'judul',
            'keterangan:ntext',
            // 'tanggal',

            [
                'class' => 'yii\grid\ActionColumn',
                'template'  => '{view}',
            ],
        ],
    ]); ?>

    <button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#myModal">Hubungi Perawat Jaga</button>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Hubungi Perawat Jaga</h4>
      </div>
      <div class="modal-body">
        <?= GridView::widget([
            'dataProvider' => $dataProviderPerawat,
            //'filterModel' => $searchModelPerawat,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'pid',
                'id_perawat',
                'nama_perawat',
                'nomor_hp',
                //'layanan',
                // 'agama',
                // 'jenis_kelamin',
                // 'penempatan',
            ],
        ]); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Hubungi</button>
      </div>
    </div>
  </div>
</div>