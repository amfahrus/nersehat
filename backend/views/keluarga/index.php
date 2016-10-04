<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\KeluargaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Keluarga';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keluarga-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama',

            [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view}',
            ],
        ],
    ]); ?>
</div>
