<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Keluarga */

$this->title = 'Update Keluarga: ' . $model->kid;
$this->params['breadcrumbs'][] = ['label' => 'Keluargas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kid, 'url' => ['view', 'id' => $model->kid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="keluarga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
