<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\AnggotaKeluarga */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anggota-keluarga-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_lengkap')->textInput() ?>

    <?= $form->field($model, 'tempat_lahir')->textInput() ?>

    <?= $form->field($model, 'tanggal_lahir')->textInput() ?>

    <?= $form->field($model, 'keluhan_sekarang')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'catatan_perkembangan')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
