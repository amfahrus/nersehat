<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Perawat */

$this->title = $model->pid;
$this->params['breadcrumbs'][] = ['label' => 'Perawats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perawat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pid], [
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
            'pid',
            'id_perawat',
            'nama_perawat',
            'nomor_hp',
            'layanan',
            'agama',
            'jenis_kelamin',
            'penempatan',
            'jaga_hari_ini:boolean',
        ],
    ]) ?>

</div>
