<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Perawat */

$this->title = 'Update Perawat: ' . $model->pid;
$this->params['breadcrumbs'][] = ['label' => 'Perawats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pid, 'url' => ['view', 'id' => $model->pid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perawat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
