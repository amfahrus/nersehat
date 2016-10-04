<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\AnggotaKeluarga */

$this->title = 'Update Anggota Keluarga ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Keluarga', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kid, 'url' => ['view', 'id' => $model->kid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="anggota-keluarga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-anggota', [
        'model' => $modelAnggota,
    ]) ?>

</div>
