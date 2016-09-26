<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AnggotaKeluargaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anggota-keluarga-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'aid') ?>

    <?= $form->field($model, 'kid') ?>

    <?= $form->field($model, 'nama_lengkap') ?>

    <?= $form->field($model, 'tempat_lahir') ?>

    <?= $form->field($model, 'tanggal_lahir') ?>

    <?php // echo $form->field($model, 'keluhan_sekarang') ?>

    <?php // echo $form->field($model, 'catatan_perkembangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
