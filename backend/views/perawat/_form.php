<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Perawat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perawat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_perawat')->textInput() ?>

    <?= $form->field($model, 'nama_perawat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
