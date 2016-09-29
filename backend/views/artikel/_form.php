<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Artikel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="artikel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jenis')->dropdownList([
                        1 => 'Keperawatan Keluarga', 
                        2 => 'Keperawatan Anak', 
                        3 => 'Keperawatan Maternitas', 
                        4 => 'Ibu Hamil dan  Menyusui',
                        5 => 'Lanjut Usia',
                        6 => 'Keperawatan Jiwa',
                        7 => 'Penyakit Kronis',
                    ]) ?>

    <?= $form->field($model, 'gambar')->textInput() ?>

    <?= $form->field($model, 'judul')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
