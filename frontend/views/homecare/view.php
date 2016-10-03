<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Homecare */

$this->title = $model->hid;
$this->params['breadcrumbs'][] = ['label' => 'Homecare', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="homecare-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->hid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->hid], [
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
            'jenis_perawatan',
            'tanggal',
            'jam',
            'lokasi',
        ],
    ]) ?>

</div>
<div class="row">
<p>
    <button type="button" class="btn btn-primary btn-lg pull-right">Reservasi Klinik</button>
</p>
</div>
<br>
<div class="row">
<p>
    <button type="button" class="btn btn-primary btn-lg pull-right">Reservasi Rumah Sakit</button>
</p>
</div>    
