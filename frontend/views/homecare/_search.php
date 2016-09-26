<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\HomecareSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="homecare-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'hid') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'jam') ?>

    <?= $form->field($model, 'longitude') ?>

    <?= $form->field($model, 'latitude') ?>

    <?php // echo $form->field($model, 'jenis_perawatan') ?>

    <?php // echo $form->field($model, 'klinik') ?>

    <?php // echo $form->field($model, 'rumah_sakit') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
