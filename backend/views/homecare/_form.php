<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Homecare */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="homecare-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanggal')->widget(
        DatePicker::className(), [
            // inline too, not bad
             'inline' => false, 
             // modify template for custom rendering
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'dd-mm-yyyy'
            ]
    ]);?>

    <?= $form->field($model, 'jam')->textInput() ?>

    <?= $form->field($model, 'longitude')->textInput() ?>

    <?= $form->field($model, 'latitude')->textInput() ?>

    <?= $form->field($model, 'jenis_perawatan')->textInput() ?>

    <?= $form->field($model, 'klinik')->textInput() ?>

    <?= $form->field($model, 'rumah_sakit')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
