<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Perawat */

$this->title = 'Create Perawat';
$this->params['breadcrumbs'][] = ['label' => 'Perawats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perawat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
