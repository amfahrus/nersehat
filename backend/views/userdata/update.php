<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UserdataInternal */

$this->title = 'Update Userdata: ' . $model->ui_id;
$this->params['breadcrumbs'][] = ['label' => 'Userdata', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ui_id, 'url' => ['view', 'id' => $model->ui_id]];
$this->params['breadcrumbs'][] = 'Update';
$model->username = $model->isNewRecord ? '' : $user->username;
$model->email = $model->isNewRecord ? '' : $user->email;
?>
<div class="userdata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
