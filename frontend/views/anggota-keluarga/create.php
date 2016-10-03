<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\AnggotaKeluarga */

$this->title = 'Create Anggota Keluarga';
$this->params['breadcrumbs'][] = ['label' => 'Anggota Keluarga', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anggota-keluarga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
