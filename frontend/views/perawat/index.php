<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PerawatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Perawats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perawat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_perawat',
            'nama_perawat',
        ],
    ]); ?>
</div>
