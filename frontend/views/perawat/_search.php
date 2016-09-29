<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PerawatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perawat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php //echo $form->field($model, 'id_perawat') ?>

    <?php echo $form->field($model, 'nama_perawat') ?>

    <?php //echo $form->field($model, 'nomor_hp') ?>

    <?php echo $form->field($model, 'layanan') ?>

    <?php echo $form->field($model, 'agama') ?>

    <?php echo $form->field($model, 'jenis_kelamin') ?>

    <?php echo $form->field($model, 'penempatan') ?>

    <?php // echo $form->field($model, 'jaga_hari_ini')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
