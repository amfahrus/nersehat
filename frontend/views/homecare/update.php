<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Homecare */

$this->title = 'Update Homecare: ' . $model->hid;
$this->params['breadcrumbs'][] = ['label' => 'Homecares', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->hid, 'url' => ['view', 'id' => $model->hid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="homecare-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
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
