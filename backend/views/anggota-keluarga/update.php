<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AnggotaKeluarga */

$this->title = 'Update Anggota Keluarga: ' . $model->aid;
$this->params['breadcrumbs'][] = ['label' => 'Anggota Keluargas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->aid, 'url' => ['view', 'id' => $model->aid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="anggota-keluarga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'keluarga' => $keluarga,
    ]) ?>

</div>
