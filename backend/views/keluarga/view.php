<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Keluarga */

$this->title = $model->kid;
$this->params['breadcrumbs'][] = ['label' => 'Keluargas', 'url' => ['index']];
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
            'kid',
            'nama_keluarga',
        ],
    ]) ?>

</div>
