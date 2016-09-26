<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KeluargaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Keluargas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keluarga-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Keluarga', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kid',
            'nama_keluarga',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
