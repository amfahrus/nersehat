<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Keluarga */

$this->title = 'Keluarga '.$model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Keluarga', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keluarga-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nama',
        ],
    ]) ?>

</div>

<div class="anggota-keluarga-index">

    <h1>Anggota Keluarga</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Anggota Keluarga', ['create-anggota','kid' => $model->kid], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama_lengkap',
            'tempat_lahir',
            'tanggal_lahir',
            // 'keluhan_sekarang:ntext',
            // 'catatan_perkembangan:ntext',
            [
              'class' => 'yii\grid\ActionColumn',
              'template' => '{view-anggota} {update-anggota} {delete-anggota}',
              'buttons' => [
                'view-anggota' => function ($url, $model) {
                    return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                'title' => Yii::t('app', 'View Anggota'),
                    ]);
                },
                'update-anggota' => function ($url, $model) {
                    return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                                'title' => Yii::t('app', 'Update Anggota'),
                    ]);
                },
                'delete-anggota' => function ($url, $model) {
                    return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                                'title' => Yii::t('app', 'Delete Anggota'),
                                'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                    ]);
                },
              ],
              'urlCreator' => function ($action, $model, $key, $index) {
                if ($action === 'view-anggota') {
                    $url ='view-anggota?id='.$model->aid.'&kid='.$model->kid;
                    return $url;
                }
                if ($action === 'update-anggota') {
                    $url ='update-anggota?id='.$model->aid.'&kid='.$model->kid;
                    return $url;
                }
                if ($action === 'delete-anggota') {
                    $url ='delete-anggota?id='.$model->aid.'&kid='.$model->kid;
                    return $url;
                }
              }
            ],
        ],
    ]); ?>
</div>
