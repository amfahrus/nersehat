<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Homecare */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="homecare-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'jenis_perawatan')->dropdownList(['Perawatan Luka' => 'Perawatan Luka', 'Perawatan Paska Stroke' => 'Perawatan Paska Stroke', 'Perawatan Lansia' => 'Perawatan Lansia', 'Perawatan Kronis' => 'Perawatan Kronis']) ?>

    <?= $form->field($model, 'tanggal')->widget(
          DatePicker::className(), [
              'language' => 'en',
              'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd',
                'todayBtn' => true
            ]
          ]
        )
    ?>

    <?= $form->field($model, 'jam')->textInput() ?>

    <?= $form->field($model, 'lokasi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
