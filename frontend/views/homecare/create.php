<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Homecare */

$this->title = 'Reservasi dan Janji';
$this->params['breadcrumbs'][] = ['label' => 'Homecare', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="homecare-create">

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
