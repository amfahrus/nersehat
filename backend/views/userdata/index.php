<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserdataInternalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Userdata';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userdata-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Userdata', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ui_id',
            'username',
            'email',
            'fullname',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
