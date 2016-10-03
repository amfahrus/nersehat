<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AnggotaKeluargaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Anggota Keluarga';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anggota-keluarga-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Anggota Keluarga', ['create'], ['class' => 'btn btn-success']) ?>
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
