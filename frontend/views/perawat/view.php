<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Perawat */

$this->title = $model->pid;
$this->params['breadcrumbs'][] = ['label' => 'Perawat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perawat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
